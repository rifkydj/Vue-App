<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

<body>
    <div>
        <h5>Rifky</h5>
    </div>
    <script>
        Vue.component(
            'example-component',
            require('./components/ExampleComponent.vue').default
        );
    </script>
</body>
</html>
