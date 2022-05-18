<?php namespace TelasSantoAntonio\Product;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        \Event::listen('offline.sitesearch.query', function ($query) {
    
            // Search your plugin's contents
            $items = Models\Product::where('name', 'like', "%${query}%")
                                            ->orWhere('short_description', 'like', "%${query}%")
                                            ->orWhere('full_description', 'like', "%${query}%")
                                            ->get();
            
            //echo '<pre>', var_dump($items) , '</pre>';

            // Now build a results array
            $results = $items->map(function ($item) use ($query) {
    
                

                // If the query is found in the title, set a relevance of 2
                $relevance = mb_stripos($item->title, $query) !== false ? 2 : 1;
                
                // Optional: Add an age penalty to older results. This makes sure that
                // newer results are listed first.
                // if ($relevance > 1 && $item->published_at) {
                //     $relevance -= $this->getAgePenalty($item->published_at->diffInDays(Carbon::now()));
                // }
    
                return [
                    'title'     => $item->name,
                    'text'      => $item->short_description,
                    'url'       => '/produtos/' . $item->slug,
                    'relevance' => $relevance,
                ];
            });

            return [
                'provider' => 'Produtos', // The badge to display for this result
                'results'  => $results,
            ];
        });
    }

}
