<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<x-app-layout>

    <div class=" p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Přidání sport</h2>
                <p class="text-gray-500 mb-6">Přidej sport s kaloriema za hodinu</p>
                <form method="post" action="{{url('create-sport')}}">
                    @csrf
                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="content-center">
                                <img  src="https://cdn-icons-png.flaticon.com/512/1647/1647241.png" class="block h-12 w-auto" >
                            </div>
                            <div class="lg:col-span-3">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">Název sportu</label>
                                        <input type="text" name="sport" id="sport" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="běh, box, plavání"/>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="email">Počet spálených kalorii při mírné zátěži za hodinu</label>
                                        <input type="number" name="kcalh" id="kcalh" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="123" />
                                    </div>




                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Přidat</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <a href="https://www.buymeacoffee.com/sammurder" target="_blank" class="md:absolute bottom-0 right-0 p-4 float-right">
                <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee" class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
            </a>
        </div>
    </div>

</x-app-layout>
