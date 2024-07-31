<div class=" flex flex-col bg-white  min-h-screen" style="height: 932px; width :450px;">
    <div style="padding-top:110px ;  " class="flex justify-center">
        <div class="bg-white rounded-lg flex justify-center items-center drop-shadow-md  "
            style="height: 54px ; width:226px; ">
            <div style=" font : inter ; font-size:22px; " class="text-backSingin">
                <div class="flex justify-center font-inter text-2xl font-bold leading-7 tracking-wide text-center">
                    DETAILS RESERVATION
                </div>


            </div>
        </div>

    </div>
    <div class="bg-white2  "
        style="height: 500px ; width:400px ;  margin-left:20px;  margin-top:40px ; border-radius: 6px; ">

        <div class="flex flex-row justify-start justify-around p-3">
            <div class="space-y-3">
                <div>
                    <label class="text-sm text-backSingin font-semibold">First Name</label>
                    <h1>{{ $guest->name }}</h1>
                </div>
                <div>
                    <label class="text-sm text-backSingin font-semibold">Email</label>
                    <h1>{{ $guest->email }}</h1>
                </div>
                <div>
                    <label class="text-sm text-backSingin font-semibold">Confirmation Code</label>
                    <h1>{{ $bookinginfo->external_reservation_id }}</h1>
                </div>
                <div>
                    <label class="text-sm text-backSingin font-semibold">Check-in</label>
                    <h1>{{ date('Y-m-d', strtotime($bookinginfo->check_in)) }}</h1>
                </div>
                <div>
                    <label class="text-sm text-backSingin font-semibold">Proprety Address</label>
                    <h1> {{ $PropertyAddresse->country }}, {{ $PropertyAddresse->number }}
                        {{ $PropertyAddresse->street }},{{ $PropertyAddresse->zip_code }} {{ $PropertyAddresse->city }}
                    </h1>
                </div>

            </div>
            <div class="space-y-3">
                <div>
                    <label class="text-sm text-backSingin font-semibold">Name</label>
                    <h1>{{ $guest->name }}</h1>
                </div>
                <div>
                    <label class="text-sm text-backSingin font-semibold">Phone</label>
                    <h1>{{ $guest->phone }}</h1>
                </div>
                <div>
                    <label class="text-sm text-backSingin font-semibold">Bouking Source</label>
                    <h1>{{ $partenaire->name }}</h1>
                </div>
                <div>
                    <label class="text-sm text-backSingin font-semibold">Check-out</label>
                    <h1>{{ date('Y-m-d', strtotime($bookinginfo->check_out)) }}</h1>
                </div>
            </div>

        </div>
        <div class="p-3 ">
            <label class="text-sm text-backSingin font-bold">Tourist Taxes</label>
            <table class="border rounded-lg  ">
                <tr class=" mt-5 font-semibold text-backSingin flex flex-row  w-80 items-center justify-around"
                    style="font-size: 10px;  height: 34px;">
                    <th></th>
                    <th class="font-bold">Day</th>
                    <th class="font-bold">Person</th>
                    <th class="font-bold"> Unit Price</th>
                    <th class="font-bold">Total</th>
                </tr>
                <tr class="bg-white  text-backSingin flex flex-row  shadow-md text-start w-80 items-center justify-around"
                    style="font-size: 10px; height: 34px ;">
                    <td class="font-bold">Tourist tax</td>
                    <td>{{ $bookinginfo->number_of_nights }}</td>
                    <td>{{ $bookinginfo->number_of_guests }}</td>
                    <td>2$</td>
                    <td>{{ $bookinginfo->total_payout }}$</td>
                </tr>

            </table>
        </div>


    </div>
    <div class="flex flex-row space-x-3  pt-8 pl-16">
        <div
            class="w-50 h-12 flex justify-center items-center rounded shadow bg-white text-teal-800  cursor-pointer hover:bg-gray-200 transition">
            <button wire:click='showFormadduser' type="button"
                class="text-backSingin rounded w-40 h-10 font-bold  bg-white shadow-lg">Back</button>

        </div>

        <div
            class="w-50 h-12 flex justify-center items-center rounded shadow bg-white text-teal-800  cursor-pointer hover:bg-gray-200 transition">
            <button wire:click='' type="button"
                class="text-backSingin rounded w-40 h-10 font-bold  bg-white shadow-lg">Dashbord</button>

        </div>


    </div>





</div>
