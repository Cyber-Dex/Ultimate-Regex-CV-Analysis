<?php


namespace App\Custom\Recruitis;


class Recruitis
{
    private string $username;
    private string $password;
    private string $deviceId;
    private string $deviceName;

    public function __construct(string $username, string $password, string $deviceId, string $deviceName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->deviceId = $deviceId;
        $this->deviceName = $deviceName;
    }

    public function logIn()
    {
        $req = curl_init();
        curl_setopt($req, CURLOPT_URL, "https://app.recruitis.io/api2/login");
        curl_setopt($req, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($req, CURLOPT_HEADER, FALSE);
        curl_setopt($req, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($req, CURLOPT_POSTFIELDS, "{
          \"password\": \"$this->password\",
          \"username\": \"$this->username\",
          \"device_id\": \"$this->deviceId\",
          \"device_name\": \"$this->deviceName\"
        }");
        $response = curl_exec($req);
        curl_close($req);
        return $response;
    }
}
