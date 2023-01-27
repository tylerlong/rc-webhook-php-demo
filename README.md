## Start

```
php -S localhost:8000
```


## Test

```
curl -X POST -H "Content-Type: application/json" -d '{"key1":"value1", "key2":"value2"}' http://localhost:8000
```


## Ngrok

### Setup

```
yarn install
```

### Start

```
yarn ngrok http 8000
```
