---
extends: _layouts.page
section: body
title: "Reading"
---

# Reading

Books that I think are valuable.

@include(
    '_partials.column-list', 
    [
        'items' => [
            'Self Improvement' => [
                'Robert Glover' => 'No More Mr. Nice Guy',
                'Mark Manson' => 'The Subtle Art of Not Giving a F*ck',
                'Viktor Frankl' => 'Man\'s Search for Meaning',
                'Greg McKeown' => 'Essentialism The Disciplined Pursuit of Less',
            ],
            'Dating & Sexuality' => [
                'Mark Manson' => 'Models',
                'Zan Perrion' => 'The Alabaster Girl',
                'Janet W. Hardy' => 'The Ethical Slut',
                'Barefoot Doctor' => 'Barefoot Doctor\'s Handbook for Modern Lovers The Tao of Amazing Sex',
                'Hackauthor²' => 'Easy Peasy Method',
            ],
            'Masculinity' => [
                'David Deida' => 'The Way of the Superior Man',
                'Moore & Gillette' => 'King, Warrior, Magician, Lover',
            ],
            'Interpersonal' => [
                'Dale Carnegie' => 'How to Win Friends and Influence People',
                'Daniel Goleman' => 'Emotional Intelligence & Working with Emotional Intelligence',
                'Thomas Erikson, David John' => 'Surrounded by Idiots',
            ],
            'Business & Work' => [
                'Cal Newport' => 'Deep Work',
                'Paul Jarvis' => 'Company of One',
                'Kim Scott' => 'Radical Candor',
                'MJ DeMarco' => 'The Millionaire Fastlane & Unscripted',          
            ],
            'Physical & Mental Health' => [
                'Sam Harris' => 'Waking Up',
                'Meta Nomad' => 'Exiting Modernity',
            ]
        ]
    ]
)
