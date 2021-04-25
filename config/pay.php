<?php

return [
    'alipay' => [
        'app_id'         => '2016101800712750',
        'ali_public_key' => 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDIgHnOn7LLILlKETd6BFRJ0GqgS2Y3mn1wMQmyh9zEyWlz5p1zrahRahbXAfCfSqshSNfqOmAQzSHRVjCqjsAw1jyqrXaPdKBmr90DIpIxmIyKXv4GGAkPyJ/6FTFY99uhpiq0qadD/uSzQsefWo0aTvP/65zi3eof7TcZ32oWpwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAnZkNGFbCm4svUHD/aR1DFOKqot/RbJjPAZYH33YGIhit9lfaUrZjQ60EpiU7epV3iSM41kIvPcGz5obM/0oGXZ1KscFN4CLFnQO34P2GN0Nx5JRT3TpqQrS7jBVVhw429PGlkeNYF2lVU+AYrCCD9loubQdJmkWwxZFeOHA5JpU9bFJpBVbjj+c8GVM4EX+wtxtVTuqLyWPt9fgvVQQhwA8VZ6x+eeSypF66KCmU2QHeTvg2HiBj7l0TMuPSWTYch/MHjF7pJdO89fbuDb9B2cVwBHSpZvgyt3nDMno862j+zLJuxG+g0wYm2nupnDdLISZxAUwt+hqjAlk7t3PS4wIDAQABAoIBAF4Z8TPDOlhd91Z04k0FZ/Skk3bFZesOIyyzROgtNORPEDCzrG0O8p6KROhf+u/rJ4D/QwTMaCDb9GuFugoFTV/Ad8VDwxg+KvjiK31wZB/DadIurxS9uI00FXhDlNobpr0DPPWrZgI0pvp6KME+eQ00M9xuKYiwbCjL8BKLD9T0+9LKJJ4gA69yExDgg0G4nkAPNfELzv3Kajst8G1UMsbr7hIFJI7Zoq/7DJrIaT9sQzxgpkr10sMW32yKd4TbmiRVN+vOuUsf6GuiS1rGN9DPvQrIdg39xXYDlDyD8l4MiZoo3p9vuUihfjyDVdY9HgvWZVwt5MFiA3Gy1E95r0ECgYEA8XAJC0Uh1+Abe6gUaUm+R3oZ/Hia2EBkr3x9EbJLcCtPmv1Eo4Gxg8Ly+9NtbZWIM07L3errQeuRuYsQzeCVQE1BZg8gj2bUNQLnhCSxkhLqgNvR5Nu+EH3FEO3MBrctvQzMBgVXANCJVkWrXbKR1HrupQz/tIYtNdZgl+QPxjkCgYEApxp4rnoSwQHYxFJy1BqajVG/Ln7znc4s9YjJuf5HVXnbGt01izx1HbQxBN4VVUs8u1n0sbkHdW2TGV1xYoXZT5PaFarxBHP3lDmkroP08Oo1/HYv/XgSx+U6r+mdf29MqSWz89OYr40UmH2Q+yyx+EdN5pOI8TOdbQr1by/oQfsCgYEAhz4x4r1D+vAPlRIO9PeY/eL4wYMxged4PxDl4k7UkS3BttkeZNTWgi9m+wdxKcx0cgE2k8XvKIrzo1KyBBFEqbNc6fWZUJrSTiulUlFXorKz56C7D47EBerdw+Dgw/ZCSb7sXocJOGyYMdpu5tqLc9G08oG4jwAGPT0r+ImJCIkCgYApqRTbUv3n9qDnWTLdpIBRqUbDvczY0/Urhd3dLAL20XmJugrGWt1L+YebEg85g5dxkhzKTjoI0bexxDUnff1OtKrTahnKpWrdHn3rMGTZx1qMRZ7zT4NHKOQ3xUOJ6OKw7QBvUpqnccHnvq5toJgCMSy/xpqGn/qom+nSvZvnDwKBgCUJNKujj3Oq4iqEclyP2viYyd3jffGUWO0d22SKoFcG93fF7roEscV+v9CraAB7w2Qhbcr8+vHRBsXsN6KQTpBfpreTfxLmrfXXwmpFL7Vkrpwc3Mu2Vtt9O0d3dIJ8Li63GmNgzQQWo0vfBAlccPjIaz0aRiv8ECBinP1I4yAv',
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
