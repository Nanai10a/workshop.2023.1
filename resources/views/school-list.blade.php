<x-app-layout>

    <body>

        <div style="padding:30px 0px 0px 30px;">
            <h2 style="
            border-bottom:5px solid;
            border-bottom-color:#ff5722;
            width: 250px
            ">
                校舎一覧
            </h2>
            <br>
            <br>

            <div style="
            padding:0 30px 0 30px;
            display:flex;
            justify-content:space-between;
            flex-wrap: wrap;
            gap: 30px 30px;
            ">
                @foreach ($schools as $school)
                    <a href="{{ url('/schools/' . $school->id) }}" style="text-decoration: none; color:black">
                        <div style="
                        width:400px; height:400px;
                        border:1px solid black;
                        ">
                            <img
                                style="margin:25px 25px 0 25px;width:350px; height:230px;border:1px solid black;object-fit: cover;"
                                src="{{ $school->schoolImages->first()?->convertToBase64() ?? '' }}"
                            >
                            <p class="mx-8 mt-2 text-3xl">
                                {{ $school->name }}
                            </h3>
                            <p class="mx-8 text-xl">
                                {{ number_format($school->price_per_hour) }}円/時
                            <p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </body>
</x-app-layout>
