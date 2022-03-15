<?php

namespace App\Model;

/**
 * Dummy class to add some context
 */
final class Events
{
    /**
     * Very short info about the event
     *
     * @param int $id
     * @return array
     */
    public function get(int $id): array
    {
        return [
            'title'       => 'The best conference ever!',
            'description' => 'Visit us!',
            'start_date'  => strtotime('+1 week'),
            'end_date'    => strtotime('+1 week 1 day'),
        ];
    }

    /**
     * Get config of the registration form
     *
     * @param int $id
     * @return array[]
     */
    public function getRegistrationForm(int $id): array
    {
        // let's assume that we have just one registration form for all events
        return [
            [
                'name'     => 'name',
                'title'    => 'Full name',
                'type'     => 'text',
                'required' => true,
            ],
            [
                'name'    => 'product',
                'title'   => 'Registration type',
                'type'    => 'select',
                'options' => [
                    '',
                    'student',
                    'professor',
                    'member',
                    'not member',
                ],
                'required' => true,
            ],
            [
                'name'     => 'discount',
                'title'    => 'Discount',
                'type'     => 'text',
                'required' => false,
            ],
        ];
    }
}
