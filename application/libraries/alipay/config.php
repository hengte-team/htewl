<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2017022405852900",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEAwlppxOxppRWA2Nxc+nnvtiyIOHT6yv4JJPDqHFmXHlXjBv7HJDm4jrbWMeoBU6h2Z3pQA+Z/NBQsg5Ymxxdsvw+eMvuG+LOeRgG6Hfyi3ictZs2qMhQo8LFw6cizmylJjbsTAbLMFgSeUTVLKV1ahcgp0IkS1FViUaZMh30uKuOrNTZfOjpm/VRqQVIGzx0rQFqWSt56A6H16hH35ssYEaNrwCN3GTR81y9HDHeA4rfET/aUyTYblCPO9mRt/x/HdQK6Gdc8yFcZHk1Phi8UXT3p1tcWmwWMxvPH3Jqcjp+zImSmruyZkQ6axa+UQOen8VQEEyeO6ohXVKzyW6LOPQIDAQABAoIBAGf2l1eYoxaEvyzCDBaMfZb0kVWp9bH6XAffu0u4/OZkSRIn3XzaR4hH86I1q8oFdnj56616chb4p6sn+cxMEobNovFgrR2Cb6rBJ778sl6llFrGr0EkmZXPRTg5fSIF3uuq44roCtXIWKvWF0OkRVUE8qEzgdgFaJeGnq9nXffgbK4HQVcBjPyZfHvvH47u9V/xjJrS0vayJziDtX9JAiraJOIiFo0JUMHee6gDSZfhf+2PI9pbr6ge4h7Qa1Og8hJz12FaoBM1fG19fvnTKK8TrGJ1iTzx+VOhFDA4IVxs0Or1k3g2cp4XwjxIjPW7f+bROVp1f7b966o6aHpZWOECgYEA5TJMGbC/pBwRYHPLJbak4m+aiTB24TeW9iGqaVPuUidcNei2m/A8DoAJUTjqAYR1GaN+p/61xNjzN0hxq/aCNkDyIaN79mJq9wfo0nfEp3HXRLb8r7PvVw8fF+/GoMQZ30naOE5ouISSdJbMc6Glj+EoqKgWVxlAFrTJa8dh9eUCgYEA2RT5c1uOOr9j0XCdNNbJ0hnkOwSTHuT3Fgzdbpx0PG08rMYH9/H2ZSjzmz5uU5TyhjoeqjCGw8lcHO2v2jYmtzO+gNZw/xlJd7rooROg7yJTswFb4gZao3nYWrYYI83dr/pn2AlxKDEpgW0eqX0heDYiMtsSi7nJKgIKKjDl8XkCgYEA3EdSAqLwHP7o6IWBqnZ21DYlFVNh/iUaTuaeTOrgs06m/hzyXL8wSVNfIRQNO3YdwY10LmvMMSu93dUfgwHBtfkHfbMNcgi2+0M7zgRUGgZ8ucsQ4qGSF18uKChIA71VjFgDhng9h5HK3IkOaNfkMntZQ3eBOSbIhMouiAqxqM0CgYEA0+89Rtl493QJUN3ALWkRarTqdJAXzk69yGJRAP9wH9qKJSfFedVZuBOOGd+OuL0vNcqiS4fK2nTJIFkRmVnK3IuBDqnNcdBPQLxTB4dxVGZQDvBhsz5+2SFJD+69jJ8dMwSmw20cc5/jpL9S8yf+OC2pn7rv1UhR1FhfcieBJwkCgYAeRepY/n7G5yl3GgXKaTiJqXpBEPvwmmpDOA5V+8TPtZgeq9JKvaCFjNKka/yBtdkBJV/BUW3luY935l7s606zwWu8DLkjtq86HWWI0RR0Zwjl3LV5Dzi4KHgzoN2WnVmYd0mW6pueBZDi0ywcD91k3O+W4OroqWVeYhZvb5wQMQ==",
		
		//异步通知地址
		'notify_url' => "http://www.htewl.com/m/callback/notifyPay.html",
		
		//同步跳转
		'return_url' => "http://www.htewl.com/m/pay/returnPay.html",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs1Z16VRzs0mNrXvaNosiYeKkNC8Rmzw7cYO/8CqZ7xTYt8CtVvun6s2QljOCJ7lbeRSbqxAqYhZD+g2GPwPRtoC9+t1WS8anQnrZi24+dKQVfurjHHNc/3MzZsliRpVgZ70GNB4qHLohdzw44Vu10LNCgDMSLv9TCicyd2G+YEeaCdlyr2wXfCvXs8Y4H0Axl5GkvWA8NUpd6hyvoOybhixVoaLWX/p1afcu4OQ9PR0ZKQ8DcEaj8cTPhtHZlNzvkbrx4K3Et1nnlG5nP2+eiMMmNdsxUMSuMJt1I6D+ZNuoGsV/0B/R3LPIJIEU0dIiURZDVakFQS5Vt1qNkw+c8wIDAQAB",
		
	
);