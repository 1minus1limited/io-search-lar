### Development

Clone the repo

```bash
git clone https://github.com/1minus1limited/io-search-lar
```

Install

```bash
composer install
```

Migrate tables

```bash
php artisan migrate
```

```bash
php artisan serve --env=testing
```

### Endpoints

`GET: /playlists`

Expected response:
```
{
    "playlists": [
        {
            "id": 60,
            "title": "Fuga qui.",
            "created_at": "2017-12-21 17:40:42",
            "updated_at": "2017-12-21 17:40:42"
        },
        ... etc.
```
---

`GET: /playlist/{id}`

Expected response:
```
{
    "id": 61,
    "title": "Doloribus aliquam quia.",
    "created_at": "2017-12-21 17:40:42",
    "updated_at": "2017-12-21 17:40:42",
    "videos": [
        {
            "id": 55,
            "title": "Magni in et asperiores.",
            "video_id": "602",
            "duration": "PT6M11S",
            "io_playlist_id": 61,
            "created_at": "2017-12-21 17:41:19",
            "updated_at": "2017-12-21 17:41:19"
        },
        ... etc.
```

---

`POST: /playlist`

Send body:

`{"title":"test"}`

Expected response:
```
{"response":"Playlist added"}
```


### Testing

Add alias to save time:

`alias p='vendor/bin/phpunit'`

And run tests:

`p tests/Feature/IoPlaylistTest.php`
