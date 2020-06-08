<?php

return [
    'alipay' => [
        'app_id'         => '2016102700771490',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtAo3GmUpozBG55EkNAsxp/x5dFaxe3U7/zIgD/07SiZdjWL7A+IfS9CmpS7noQkWsnMtlNfKi3b1Dujg1ygvPrNDcY5DWLsR4aq4km8aggA0G8axNOs+uElMxbe0FxsjgOP8wJFrivVS4i7GSkRodOA4UkhaxGG6vFEoSWo4bTlw2mNJYeBFWfUYWPf+p9ffB9XTmK9w2QAAOBqXn79fdZVrOTpUrip0c3k392wLXYi+Hr3Wob2Du7v6QzG1O2c6EXksItdwpHwACgc6ChxCcK7pYH+A+lnp1xF6IFnfzxEQdNKT5FOuyjIc9mCUVmWfYInY5DY3nvjrvhWqTneMDQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAks+sqEJG3vo9jH+l4pww78wKbNN/hQ9w8afXGjMxKZmUbcItQpsZ5WgmeC9Atr0CrKwIVxvj9NrFr7CpTpPbbKKIuSw8AwNkMzAJTDY7QRZZd350KiNxHeD+xBEOhrunN4VUrti2h/hjHrktY0Z8tSyL9ZCj791kweGSH+snZpTn17rLDxUguj3xqwvUDeYMWVigsEKYFxGw9jZU3BpiSzsj0Gkl2xmCAjzsOjk8mKMV2MHSlQJf5m90ZwkrZfEks1kNrYoiaUyGh25DSWrzcSGOG2CBrnvMbeZpNjL2T3DYXcbjLgW0ZiM0d+I+mcidjjAwj0YkiOg/TMSNz3YYpQIDAQABAoIBAFLeeOYtKxX4CMAC2Z81bQYelY/iPmvcUHOHuwpl9Q03TKo73hJnvFFa3cQfYBcGT7kqDjclXiI7TzUhsh/RpB0JDcYAawuEYY3nQohLYF0YAX5K2cVjZhlohEYmHp381KGpWCit2TKdCU4xVqZgBkq6D3KYp4Dg5lvuOO5dbUsgSYf4HjMndkwQjMEZsoncSyLloYpwlBs9KYIKmNjUeHe4XWnDS8JMiA2RpNtrvNOCl5nRgKkSjl4p4VsA1aCOEDaPt7TW1idwYpR4qvq5bOrwXb/LehzdoknInpGL9PiVLjmE8hnl4j1CdlWe7N2YQIKxx28y0Pv+zGm3g4YPIQ0CgYEA6jwOn4ZyfgSDc+wkHYg8I/jAlELf3hPahnLx4loJXk4vaGOPgVmBa5iKWEVPy10AE5/JuP7jDURcUw9xoPVyBGlRTcZJ06KewUeidmxXTT5Fn7JkHrTu049Ro92CM1zmfWa0KQFxd7E31mZV/wQe5V7QXRJkG6UCRGaQWoztU68CgYEAoHQAVSu9kOTAozpkurnLgWVl76cJiPFGwlPLO70J2BshFIInE4tJjeroQVXsJXuAKiDvOZMcTXHjMLLuRIPHSrg+B7CegYNnTTuQ7T9eboJSdo678jNNPiGR0EIs4tUEiIXnzb7hM/Vj6677MnCDraHP575VLdwA/msGPAKQ6esCgYB/aZXGvrqOw+PBbeUjT1TveENBIrNluMT4t5PNvY41BzCQhv+rq8VTgtFWPLWv+HGvOw7em39kWxghclgr5vdTYPqB5OeJwH68wjukUUCX2tTCjqYZcfArkl0lVruZNuKFuhUr7QYMxpCKBnam1lX8DLwotHVR+Esoa+X/64K5LwKBgCKzE4NX00YrglGKhlAvcAhKwnHCgPhhnXjXIEOKDT/0FgJWZ1b9r2mGnLXMfCZbAAucVb/wxZUmBQj6GTct/IJ3N8r38j92CHgWYrA8HRLvEiBbm9+0IodGQT91oDlp8fIIa2n+Vrui3PoSPHbbCE8biFfIvKkPRBPBV3bQ40ADAoGAHCptcHLW1+IeeqJF+r+3+DgG2ibcKInP9v1P2/5P0xhC+OkDaFHXcQvRqNbsnni0D6JI03jkAoi6lJ3EaNxq4SSOmcjBY/0udcEYPOH1DLUSECoLXwaqONv822S5SXCmtn6LwSY51vusP6uYIHDnWQVuZcHXbo7RDNHQlgP2RIU=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
