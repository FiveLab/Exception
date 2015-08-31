.. title:: Exceptions

==========
Exceptions
==========

This package adds another exceptions to you system.

#. **UnexpectedTypeException**

#. **JsonParseException**

#. **ViolationListException**
    The package `symfony/validator <https://packagist.org/packages/symfony/validator>`_ should be installed.

#. **UnexpectedTrait**
    Helper for create unexpected exceptions.

Installation
------------

Add **FiveLab/Exception** in your composer.json:

.. code-block:: json

    {
        "require": {
            "fivelab/exception": "~1.0"
        }
    }


Now tell composer to download the library by running the command:


.. code-block:: bash

    $ php composer.phar update fivelab/exception
