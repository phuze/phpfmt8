<?php

$this->mock(Foo::class, function ($m) {
    return $m->shouldReceive('foo');
});

(new ClassParser)->parse();

// commment

(new ClassParser)->parse();

/** commment **/

(new ClassParser)->parse();
#[SetUp]

(new ClassParser)->parse();
(new ClassParser)->parse();

$a()();