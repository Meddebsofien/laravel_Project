<div class=" flex flex-col bg-white  min-h-screen" style="height: 932px; width :450px;">
    <div style="padding-top:110px ;  " class="flex justify-center">
        <div class="bg-white rounded-lg flex justify-center drop-shadow-md  " style="height: 60px ; width:226px; ">
            <div style=" font : inter ; font-size:22px; " class="text-backSingin">
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    WELCOME
                </div>
                <div class="flex justify-center font-inter text-2xl font-semibold leading-7 tracking-wide text-center">
                    {{ $bookingGuest->name }}
                </div>

            </div>
        </div>


    </div>
    <div class="text-center pt-4">
        <div class="font-inter text-[16px] font-bold leading-[19.36px] tracking-[0.02em] text-center">
            PLEASE START YOUR PRE-CHECKIN</div>
        <div>Appartement {{ $Property->city }} </div>
    </div>

    <div class="bg-white2  "
        style="height: 199px ; width:350px ;  margin-left:50px;  margin-top:40px ; border-radius: 6px; ">
        <div class="p-2 ">
            <div class=" bg-white2 drop-shadow-2">
                <div class="text-left font-inter text-lg font-semibold leading-tight text-bleuee">
                    Reservation Code
                </div>

                <div> {{ $bookinginfo['external_reservation_id'] }}</div>
                <div class="border-t border-backSingin my-2"></div>
            </div>



            <div class="flex space-x-20 pl-1 pt-1">
                <div>
                    <ul class="max-w-md space-y-4 text-backSingin  list-inside dark:text-gray-400 ">
                        <li>
                            <div>
                                <div class="text-left font-inter text-lg font-semibold leading-tight text-bleuee">
                                    Arrival
                                </div>

                                <div> {{ date('Y-m-d', strtotime($bookinginfo->check_in)) }}</div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="text-left font-inter text-lg font-semibold leading-tight text-bleuee">
                                    Arrival Time
                                </div>

                                <div> {{ date('H:i:s', strtotime($bookinginfo->check_in)) }}</div>
                            </div>
                        </li>

                    </ul>

                </div>

                <div>
                    <ul class="max-w-md space-y-4 text-backSingin  list-inside dark:text-gray-400 ">
                        <li>
                            <div>
                                <div class="text-left font-inter text-lg font-semibold leading-tight text-bleuee">
                                    Departure
                                </div>

                                <div>{{ date('Y-m-d', strtotime($bookinginfo->check_out)) }}</div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="text-left font-inter text-lg font-semibold leading-tight text-bleuee">
                                    Guest
                                </div>

                                <div> {{ $bookinginfo['number_of_guests'] }}
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </div>



    </div>


    <div class="bg-white2  "
        style="background-image: url('{{ asset('images/maison.png') }}'); background-size: cover;       height: 199px ; width:350px ;  margin-left:50px;  margin-top:40px ; border-radius: 6px; ">

    </div>

    <div class="flex space-x-3 " style="margin-left: 10px">


        <livewire:components.item :composant="'lits'" :num="$PropertyAttribute->beds" :icon="'fas fa-bed fa-2x'" />
        <livewire:components.item :composant="'present'" :num="$PropertyAttribute->present" :icon="'fas fa-gift fa-2x'" />
        <livewire:components.item :composant="'break fast'" :num="$PropertyAttribute->break_fast . '/j'" :icon="'fas fa-coffee fa-2x'" />
        <livewire:components.item :composant="'surprise'" :num="$PropertyAttribute->surprise" :icon="'fas fa-glass-cheers fa-2x'" />



    </div>



    <div class="ml-16">
        <livewire:components.BottomNavigation :back="$back" :next="$next" />

    </div>




</div>
