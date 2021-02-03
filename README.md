# POKEMON BOT API

API for Pokemon Bot User Register & View List User

### Specification
* Language <b> PHP </b>
* Framework <b> Laravel </b>
* Database <b> Postgres SQL </b>

### Access
* <b> Register </b>
  * URL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<b> {{host}}/api/pokemon/register </b>
  * Method : <b> POST </b>
  * Body
    ```json
        {
            "id" : "test",
            "name" : "myName"
        }
    ```
  * Response
    ```json
        {
            "message" : "success"
        }
    ```
* <b> List User </b>
  * URL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<b> {{host}}/api/pokemon/user </b>
  * Method : <b> GET </b>
  * Response
    ```json
        [
            {
                "id": "test",
                "name": "myName",
                "created_at": "2021-02-03T09:52:25.000000Z",
                "updated_at": "2021-02-03T09:52:25.000000Z"
            },
            {
                "id": "test123",
                "name": "myName123",
                "created_at": "2021-02-03T09:52:37.000000Z",
                "updated_at": "2021-02-03T09:52:37.000000Z"
            }
        ]
    ```
