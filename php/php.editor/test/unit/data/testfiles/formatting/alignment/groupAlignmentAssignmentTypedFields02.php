<?php

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

class GH7190_01 {

    private ?string $t1                = '';
    private ?Test $t2                  = null;
    private Test1|Test2|null $t3       = null;
    private array|(Test2&Test3) $test4 = [];
    private $test5                     = [];
}

class GH7190_02 {

    private ?string $test1 = '';
    private Test $test2    = null;
    private ?int $test3    = null;
    private ?array $test4  = [];
}

class GH7190_03 {

    private ?string $t1                = '';
    private ?Test $t2;
    private ?Test $t3                  = null;
    private readonly Test1&Test2 $t4;
    private array|(Test2&Test3) $test5 = [];
}

class GH7190_04 {

    private const ?string C1   = '';
    public const ?string CCCC2 = '';
    const ?string CCCC3        = '';

    private ?Test $t2;
    private ?Test $t3                  = null;
    private readonly Test1&Test2 $t4;
    private array|(Test2&Test3) $test5 = [];
}
