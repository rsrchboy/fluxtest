#!/usr/bin/env perl
use strict;
use warnings;
use FluxTest;

FluxTest->setup_engine('PSGI');
my $app = sub { FluxTest->run(@_) };

