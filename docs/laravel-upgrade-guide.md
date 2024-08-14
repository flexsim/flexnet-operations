# Laravel Upgrade Guide

update composer dependencies for `illuminate/contracts` to include the new laravel version. i.e. change `^9.0|^10.0` to `^9.0|^10.0|^11.0`

There may be composer conflics which you should remedy. See the PHP upgrade guide

## Test package dependencies

This pacakge uses pestphp and orchestra/testbench in order to run tests. Both packages have versions that match up to laravel versions. When updating the illuminate/contracts version you will also most likely need to update the versions for these packages as well

## Test Action Runner

The `.github/workflows/run-tests.yml` defines the automated test workflow which should be updated with the appropriate versions of laravel and testbench
