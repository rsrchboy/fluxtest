#!/usr/bin/env perl
use strict;
use warnings;

use lib '../lib';

use FluxTest;

FluxTest->setup_engine('PSGI');
my $app = sub { FluxTest->run(@_) };

Plack::Handler::FCGI->new->run($app);
