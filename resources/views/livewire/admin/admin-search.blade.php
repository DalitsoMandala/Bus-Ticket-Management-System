<div>







    <div class="search-box navbar-top-search-box d-none d-lg-block" style="width:25rem;" x-data="{
        search: '',
        limit_customers: 0,
        limit_routes: 0,
        isOpen: false,
        isLoading: false, // Flag for loading indicator
        items_customers: {{ $customers }},
        items_routes: {{ $routes }},
        CustomerSearchQuery(item) {
    
            query = this.search;
    
            return (
                item.customer_uuid.toLowerCase().includes(query.toLowerCase()) ||
                item.first_name.toLowerCase().includes(query.toLowerCase()) ||
                item.last_name.toLowerCase().includes(query.toLowerCase()) ||
                item.email.toLowerCase().includes(query.toLowerCase())
            );
        },
        filteredItems_customers: function() {
            return this.items_customers.filter(item => this.CustomerSearchQuery(item));
        },
    
        //routes
        RoutesSearchQuery(item) {
    
            query = this.search;
    
            return (
                item.depart_from.toLowerCase().includes(query.toLowerCase()) ||
                item.depart_to.toLowerCase().includes(query.toLowerCase()) ||
                item.time_of_day.toLowerCase().includes(query.toLowerCase()) ||
                item.check_in_time.toLowerCase().includes(query.toLowerCase()) ||
                item.depart_time.toLowerCase().includes(query.toLowerCase())
    
            );
        },
        filteredItems_routes: function() {
            return this.items_routes.filter(item => this.RoutesSearchQuery(item));
        },
    
    
    
    
        handleInput() {
            // Set a loading indicator
            this.isLoading = true;
    
            // Clear the loading indicator after a delay
            setTimeout(() => {
                this.isLoading = false;
            }, 1000); // Adjust the delay time (in milliseconds) as needed
        },
    
        init() {
    
            this.$watch('search', (query) => {
                customer_limit = this.items_customers.length;
                routes_limit = this.items_routes.length;
    
                if (query != '') {
                    this.limit_customers = customer_limit;
                    this.limt_routes = routes_limit;
                } else {
                    this.limit_customers = 0;
                    this.limt_routes = 0;
                }
    
    
            });
        },
    }">
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
                aria-label="Search" placeholder="Customers,routes..." x-model="search" @input="handleInput" , />
            <span class="fas fa-search search-box-icon"></span>
        </form>
        <div class="shadow-none cursor-pointer btn-close position-absolute end-0 top-50 translate-middle"
            data-bs-dismiss="search" @click="search = ''"><button class="p-0 btn btn-link btn-close-falcon"
                aria-label="Close"></button>
        </div>
        <div class="py-0 overflow-hidden border dropdown-menu border-300 font-base start-0 w-100">
            <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="pb-3 list">
                    <div class="d-flex justify-content-center load">
                        <div class="mx-3 my-2 spinner-border spinner-border-sm" role="status" x-show="isLoading">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>


                    <div class="showloader" x-show="isLoading == false">

                        {{-- Customers --}}
                        <div class="customers_data">
                            <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm text-uppercase"
                                x-show="search !== '' ">
                                Customers </h6>
                            <div class="py-2">

                                <template x-for="(item, index) in items_customers" :key="index">
                                    <li x-show="(CustomerSearchQuery(item)) && search !== ''">

                                        <a class="py-2 dropdown-item" href="{{ route('admin-customers') }}">

                                            <div class="py-2 d-flex align-items-center">
                                                <div class="left">

                                                    <div class="avatar avatar-l me-2 text-900" x-data="{
                                                        img: '{{ asset('storage/profile_pictures') }}',
                                                        blank_image: '{{ asset('assets/img/user.png') }}',
                                                    }">

                                                        <img class="rounded-circle " alt=""
                                                            x-show="item.profile_picture"
                                                            x-bind:src="img + '/' + item.profile_picture">
                                                        <img class="rounded-circle " alt=""
                                                            x-show="!item.profile_picture" x-bind:src="blank_image">


                                                    </div>
                                                </div>
                                                <div class="flex-1 right">
                                                    <h6 class="mb-0 text-1000 title"
                                                        x-text="item.first_name + ' ' + item.last_name"></h6>

                                                    <p class="mb-0 fs--2 d-flex text-700"
                                                        x-text="'ID: '+item.customer_uuid">
                                                    </p>
                                                    <p class="mb-0 fs--2 d-flex text-700" x-text="item.email"></p>

                                                </div>


                                            </div>
                                        </a>


                                    </li>


                                </template>


                                <div class="p-2" x-show="filteredItems_customers().length === 0">No results found.
                                </div>


                            </div>
                        </div>

                        {{-- Routes --}}


                        <div class="routes_data">
                            <h6 class="py-2 dropdown-header text-1000 fs--1 border-bottom border-200 lh-sm text-uppercase"
                                x-show="search !== '' ">
                                Routes </h6>
                            <div class="py-2">

                                <template x-for="(item, index2) in items_routes" :key="index2">
                                    <li x-show="(RoutesSearchQuery(item)) && search !== ''">

                                        <a class="py-2 dropdown-item" href="{{ route('admin-routes') }}">

                                            <div class="py-2 d-flex align-items-center">
                                                <div class="left">
                                                    <div class="avatar avatar-l me-2 text-900">

                                                        <img class=""
                                                            src="{{ asset('assets/img/bus-school.png') }}">



                                                    </div>

                                                </div>
                                                <div class="flex-1 right">
                                                    <h6 class="mb-0 text-1000 title"
                                                        x-text="item.depart_from + ' to '+ item.depart_to+' ('+item.time_of_day+')'+' '+item.depart_time">
                                                    </h6>



                                                </div>


                                            </div>
                                        </a>


                                    </li>


                                </template>
                                <div class="p-2" x-show="filteredItems_routes().length === 0">No results found.
                                </div>


                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function() {

        });
    </script>
@endpush
