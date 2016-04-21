# BasicLogger

This is an *extremely* basic implemention of PSR-3 logging. Everything is simply written to error_log. I wrote this package to act as a failback for components that require a PSR-3 logger so that they can instantiate this instead. 