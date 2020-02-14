<?php namespace Bookrr\Portfolio;

use Backend;
use System\Classes\PluginBase;

/**
 * portfolio Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'portfolio',
            'description' => 'No description provided yet...',
            'author'      => 'bookrr',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bookrr.portfolio.some_permission' => [
                'tab' => 'portfolio',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'portfolio' => [
                'label'       => 'Portfolio',
                'url'         => Backend::url('bookrr/portfolio/projects'),
                'icon'        => 'icon-leaf',
                'permissions' => ['bookrr.portfolio.*'],
                'order'       => 400,
                'sideMenu' => [
                    'projects' => [
                        'label'       => 'Projects',
                        'url'         => Backend::url('bookrr/portfolio/projects'),
                        'icon'        => 'icon-file-text',
                        'permissions' => ['bookrr.portfolio.*'],
                    ],
                    'awards' => [
                        'label'       => 'Awards',
                        'url' => Backend::url('bookrr/portfolio/awards'),
                        'icon'        => 'icon-cube',
                        'permissions' => ['bookrr.portfolio.*'],
                    ],
                    'skills' => [
                        'label'       => 'Skills',
                        'url'         => Backend::url('bookrr/portfolio/skills'),
                        'icon'        => 'icon-th',
                        'permissions' => ['bookrr.category.*'],
                    ],
                    'tag' => [
                        'label'       => 'Tags',
                        'url'         => Backend::url('bookrr/portfolio/tag'),
                        'icon'        => 'icon-tag',
                        'permissions' => ['bookrr.category.*'],
                    ]
                ]
            ],
        ];
    }
}
