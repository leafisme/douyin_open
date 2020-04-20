# Douyin\Open\UserInfoApi

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthUserinfoGet**](UserInfoApi.md#oauthuserinfoget) | **GET** /oauth/userinfo/ | 获取用户信息

# **oauthUserinfoGet**
> \Douyin\Open\Model\OauthUserinfoResponse oauthUserinfoGet($access_token, $open_id)

获取用户信息

* Scope: `user_info`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Douyin\Open\Api\UserInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | 
$open_id = "open_id_example"; // string | 

try {
    $result = $apiInstance->oauthUserinfoGet($access_token, $open_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInfoApi->oauthUserinfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  |
 **open_id** | **string**|  |

### Return type

[**\Douyin\Open\Model\OauthUserinfoResponse**](../Model/OauthUserinfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

