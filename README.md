## DexDigital-callback

This is a test project for DexDigital tech company.
The task is to implement callback handling for payment gateway? with order status update.
With redirection to "sorry" or "thank-you" page according to payment status.

## Installation 

    git clone https://github.com/taras-drobinskyi/dexdigital-callback.git
    cd dexdigital-callback
    composer install
    sudo cp .env.example .env
    sudo chown $(whoami) .env
    
Change connection details to db in .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

After db connection setup:

    php artisan key:generate
    php artisan config:cache
    php artisan migrate:fresh --seed --seeder=OrderSeeder
    php artisan serve

Route for api callback is /order/callback with POST method
Callback payload example

    {
      "pay_form": {
        "token": "xxx",
        "design_name": "des1"
      },
      "transactions": {
        "12345-7891234567": {
          "id": "12345-7891234567",
          "operation": "pay",
          "status": "fail",
          "descriptor": "FAKE_PSP",
          "amount": 2345,
          "currency": "USD",
          "fee": {
            "amount": 0,
            "currency": "USD"
          },
          "card": {
            "bank": "CITIZENS STATE BANK",
          }
        }
      },
      "error": {
        "code": "6.01",
        "messages": [
          "Unknown decline code"
        ],
        "recommended_message_for_user": "Unknown decline code"
      },
      "order": {
        "order_id": "12345-7891234567",
        "status": "declined",
        "amount": 2345,
        "refunded_amount": 0,
        "currency": "USD",
        "marketing_amount": 2345,
        "marketing_currency": "USD",
        "processing_amount": 2345,
        "processing_currency": "USD",
        "descriptor": "FAKE_PSP",
        "fraudulent": false,
        "total_fee_amount": 0,
        "fee_currency": "USD"
      },
      "transaction": {
        "id": "12345-7891234567",
        "operation": "pay",
        "status": "fail"
      }
    }
