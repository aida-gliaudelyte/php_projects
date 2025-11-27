🐓 Going to Bed — A Tiny PHP OOP Playground

This delightfully ridiculous PHP project exists for one purpose:
to give barnyard animals properly formatted names and very fashionable pajamas.

It’s a small object-oriented practice project built with pure PHP, featuring:

Static helper methods

Custom string utilities

Classes, inheritance, and method overriding

Setters, constructors, and a surprising amount of sleepwear

✨ What This Program Does

Creates a helper class (StringUtils)
This class contains a custom method secondCase() that formats names the way our fictional farmer demands:

The whole name is lowercase

Except for the second letter, which becomes uppercase

It also safely handles single-character strings and empty strings, because even "Q" deserves love.

Builds a Pajamas class
Each pair of pajamas belongs to an animal and has:

an owner

a fit (“fine,” “tight,” etc.)

a color

The constructor formats the owner’s name using the helper class, and the describe() method tells us exactly what the pajamas look like.

Allows modifications
A setFit() method lets us change how the pajamas fit—important when, for example, the chicken shrinks them in the wash.

Adds a fancier pajama type: ButtonablePajamas
Some animals need buttons!
This subclass inherits from Pajamas, adds a button_state, and overrides the describe() method to mention whether the pajamas are buttoned or unbuttoned.

Tests everything on barnyard creatures

Chicken gets blue pajamas that eventually become tight

Moose gets buttonable pajamas and toggles the buttons like a fashion icon