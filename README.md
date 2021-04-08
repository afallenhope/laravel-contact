# Laravel Contact

My first package created for Laravel 7.x
It's still using Bootstrap classes as my local install at the time was 5.8 and I upgraded my project to  7. I haven't updated the themes.

## TODO
    Update themes from Bootstrap to Tailwindcss OR Vanilla CSS.

## Features
  - Simple contact form
  - Change the reply message that's displayed from your `.env`


## Env Variables
```yaml
GOLDFEESH_CONTACT_EMAIL="email-to-send-to"
GOLDFEESH_CONTACT_REPLYMESSAGE="Thank you for your email."
```

## Installation
- Download the zip file.
- Include the `ContactServiceProvider` in your `app/Providers/AppServiceProvider.php`
