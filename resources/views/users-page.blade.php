<x-header componentName="Users-Page"/>

@csrf

<script>
    var data = @json($names);
    console.warn(data[2]);
    </script>