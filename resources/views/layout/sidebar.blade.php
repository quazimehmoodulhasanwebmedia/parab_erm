<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="{{ asset('public/assets/img/favicon.png') }}" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> {{ env('PROJECT_NAME') }} </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">


            <li class="menu @php check_actice_or_show(['dashboard'],'active') @endphp">
                <a href="{{ url('dashboard') }}" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu @php check_actice_or_show(['organization.companies'],'active') @endphp">
                <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-box">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span>Organization</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu submenu recent-submenu mini-recent-submenu list-unstyled" id="components"
                    data-parent="#accordionExample">
                    <li class="@php check_actice_or_show(['organization.companies'],'active') @endphp">
                        <a href="{{ route('organization.companies') }}"> Company </a>
                    </li>

                </ul>
            </li>

            <li
                class="menu @php check_actice_or_show([
                    'company_masters.location',
                    'company_masters.projects',
                    'company_masters.department',
                    'company_masters.designation',
                    'company_masters.grade',
                    'salary_masters.allowances',
                    'salary_masters.deduction',
                    'hr_masters.officeshift',
                    'LeaveType',
                    'Holiday',
                    'employee-status',
                    'Holiday',
                    'employee',
                    'hr_document.offer-letter',
                        'hr_document.appointment-letter',
                        'hr_document.complaint',
                        'hr_document.confirmation-letter',
                        'hr_document.award', 
                        'admin_master.vendor-category', 
                        'admin_master.expenses-category', 
                        'admin_master.vendor-details', 
                        'admin_master.admin-documents', 
                        'employees_masters.personal-details', 
                        'employees_masters.official-details', 
                        'employees_masters.statutory-details', 
                        'employees_masters.qualification-details', 
                        'employees_masters.salary-details', 
                        'employees_masters.master', 
                        'employees_masters.other-master', 
                        'employees_masters.assetperk-details',
                        'banks_masters.employer-bank',
                        'banks_masters.salary_bank',
                        'assets_masters.category',
                        'assets_masters.assets',
                        'assets_masters.company-assets',
                        'statutory_masters.employee-pf',
                        'statutory_masters.esic',
                        'statutory_masters.gratuity',
                        'statutory_masters.income-tax',
                        'statutory_masters.profession-tax',
                        

                    ],'active') @endphp">
                <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-layers">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                        <span>Masters</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">

                    <li
                        class="@php check_actice_or_show([
                                'company_masters.location',
                                'company_masters.projects',
                                'company_masters.department',
                                'company_masters.designation',
                                'company_masters.grade',
                            ],'active') @endphp">
                        <a href="#pages-error2" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Company Masters <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error2"
                            data-parent="#pages">
                            <li
                                class="
                                    @php check_actice_or_show(
                                        ['company_masters.location'],'active') @endphp">
                                <a href="{{ route('company_masters.location') }}"> Location / Branch </a>
                            </li>
                            <li
                                class="
                                    @php check_actice_or_show(
                                        ['company_masters.projects'],'active') @endphp">
                                <a href="{{ route('company_masters.projects') }}"> Project / Cost Center</a>
                            </li>
                            <li
                                class="
                                        @php check_actice_or_show(
                                            ['company_masters.department'],'active') @endphp">
                                <a href="{{ route('company_masters.department') }}"> Department </a>
                            </li>
                            <li
                                class="
                                    @php check_actice_or_show(
                                        ['company_masters.grade'],'active') @endphp">
                                <a href="{{ route('company_masters.grade') }}"> Grade </a>
                            </li>
                            <li
                                class="
                                        @php check_actice_or_show(
                                            ['company_masters.designation'],'active') @endphp">
                                <a href="{{ route('company_masters.designation') }}"> Designation /
                                    Position</a>
                            </li>
                            <li class="">
                                <a href="#"> Hierarchy </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="@php check_actice_or_show([
                            'salary_masters.allowances',
                            'salary_masters.deduction',
                            ],'active') @endphp">
                        <a href="#pages-error3" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Salary Masters <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error3"
                            data-parent="#pages">
                            <li
                                class=" @php check_actice_or_show([
                            'salary_masters.allowances',
                            ],'active') @endphp">
                                <a href="{{ route('salary_masters.allowances') }}"> Allowances </a>
                            </li>
                            <li
                                class=" @php check_actice_or_show([
                            'salary_masters.deduction',
                            ],'active') @endphp">
                                <a href="{{ route('salary_masters.deduction') }}"> Deductions </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="@php check_actice_or_show(
                        ['hr_masters.officeshift','LeaveType','employee','Holiday','employee-status'],'active') @endphp ">
                        <a href="#pages-error1" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> HR Masters <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error1"
                            data-parent="#pages">
                            <li
                                class="@php check_actice_or_show(
                                    ['hr_masters.officeshift'],'active') @endphp ">
                                <a href="{{ route('hr_masters.officeshift') }}"> Shift Master </a>
                            </li>

                            <li
                                class="@php check_actice_or_show([
                    'LeaveType'],'active') @endphp ">
                                <a href="{{ url('LeaveType') }}"> Leave Master </a>
                            </li>
                            <!-- <li>
                                        <a href="manegeleaves.html"> Manage Leaves </a>
                                    </li> -->
                            <li
                                class="@php check_actice_or_show([
                    'employee'],'active') @endphp ">
                                <a href="{{ route('employee') }}"> Employee Lists </a>
                            </li>
                            <li class="@php check_actice_or_show([
                    'Holiday'],'active') @endphp ">
                                <a href="{{ url('Holiday') }}"> Manage Holiday </a>
                            </li>
                            <li
                                class=" @php check_actice_or_show([
                    'employee-status'],'active') @endphp">
                                <a href="{{ url('employee-status') }}"> Employee Status </a>
                            </li>
                            <li>
                                <a href="#"> Salary Setup </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="@php check_actice_or_show([
                        'hr_document.offer-letter',
                        'hr_document.appointment-letter',
                        'hr_document.complaint',
                        'hr_document.confirmation-letter',
                        'hr_document.award',                        
                        ],'active') @endphp">
                        <a href="#pages-error4" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">HR Documents <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error4"
                            data-parent="#pages">

                            <li
                                class="@php check_actice_or_show([
                                'hr_document.offer-letter'                       
                                ],'active') @endphp">
                                <a href="{{ route('hr_document.offer-letter') }}"> Offer Letter </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                                'hr_document.appointment-letter'                       
                                ],'active') @endphp">
                                <a href="{{ route('hr_document.appointment-letter') }}"> Appointment Letter
                                </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                                'hr_document.confirmation-letter'                       
                                ],'active') @endphp">
                                <a href="{{ route('hr_document.confirmation-letter') }}"> Confirmation Letter
                                </a>
                            </li>

                            <li>
                                <a href="#"> Promotion </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                                'hr_document.award'                       
                                ],'active') @endphp">
                                <a href="{{ route('hr_document.award') }}"> Award </a>
                            </li>
                            <li>
                                <a href="#"> Travel </a>
                            </li>
                            <li>
                                <a href="#"> Transfer </a>
                            </li>
                            <li>
                                <a href="#"> Resignations </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                                'hr_document.complaint'                       
                                ],'active') @endphp">
                                <a href="{{ route('hr_document.complaint') }}"> Complaints </a>
                            </li>
                            <li>
                                <a href="#"> Warnings </a>
                            </li>
                            <li>
                                <a href="#"> Terminations </a>
                            </li>
                            <li>
                                <a href="#"> Appreciation </a>
                            </li>

                        </ul>

                    </li>

                    <li
                        class="@php check_actice_or_show([
                    'admin_master.vendor-category', 
                    'admin_master.expenses-category', 
                    'admin_master.vendor-details', 
                    'admin_master.admin-documents', 
                    ],'active') @endphp">
                        <a href="#pages-error5" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            Admin Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error5"
                            data-parent="#pages">
                            <li
                                class="@php check_actice_or_show([
                                'admin_master.vendor-category', 
                                ],'active') @endphp">
                                <a href="{{ route('admin_master.vendor-category') }}"> Vendor Category </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                                'admin_master.expenses-category', 
                                ],'active') @endphp">
                                <a href="{{ route('admin_master.expenses-category') }}"> Expenses Category </a>
                            </li>
                            {{-- <li>
                                <a href="#"> Vendor </a>
                            </li>
                             <li>
                                <a href="#"> Documents </a>
                            </li>
                            <li>
                                <a href="#"> General </a>
                            </li>
                            <li>
                                <a href="#"> Activity Category </a>
                            </li> --}}
                            <li
                                class="@php check_actice_or_show([
                                'admin_master.vendor-details', 
                                ],'active') @endphp">
                                <a href="{{ route('admin_master.vendor-details') }}"> Vendor Details </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                                'admin_master.admin-documents', 
                                ],'active') @endphp">
                                <a href="{{ route('admin_master.admin-documents') }}">Admin Documents </a>
                            </li>
                            {{-- <li>
                                <a href="#"> Item Master </a>
                            </li> --}}
                        </ul>
                    </li>

                    <li
                        class="@php check_actice_or_show([
                        'employees_masters.personal-details', 
                        'employees_masters.official-details', 
                        'employees_masters.statutory-details', 
                        'employees_masters.qualification-details', 
                        'employees_masters.salary-details', 
                        'employees_masters.master', 
                        'employees_masters.other-master', 
                        'employees_masters.assetperk-details', 
                        ],'active') @endphp">
                        <a href="#pages-error6" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Employee Masters <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error6"
                            data-parent="#pages">
                            <li
                                class="@php check_actice_or_show([
                                'employees_masters.personal-details'],'active') @endphp">
                                <a href="{{ route('employees_masters.personal-details') }}">Personal Details </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                                'employees_masters.official-details'],'active') @endphp">
                                <a href="{{ route('employees_masters.official-details') }}">Official Details </a>
                            </li>

                            <li
                                class="@php check_actice_or_show([
                                'employees_masters.statutory-details'],'active') @endphp">
                                <a href="{{ route('employees_masters.statutory-details') }}"> Statutory Details </a>
                            </li>

                            <li
                                class="@php check_actice_or_show([
                                'employees_masters.qualification-details'],'active') @endphp">
                                <a href="{{ route('employees_masters.qualification-details') }}"> Qualification
                                    Details </a>
                            </li>

                            <li
                                class="@php check_actice_or_show([
                                'employees_masters.salary-details'],'active') @endphp">
                                <a href="{{ route('employees_masters.salary-details') }}"> Salary Details </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                                'employees_masters.master'],'active') @endphp">
                                <a href="{{ route('employees_masters.master') }}">Masters </a>
                            </li>

                            <li
                                class="@php check_actice_or_show([
                                'employees_masters.other-master'],'active') @endphp">
                                <a href="{{ route('employees_masters.other-master') }}">Other Masters </a>
                            </li>


                            <li
                                class="@php check_actice_or_show([
                                'employees_masters.assetperk-details'],'active') @endphp">
                                <a href="{{ route('employees_masters.assetperk-details') }}"> Asset/ Perk Details </a>
                            </li>
                            <!-- <li>
                                <a href="#"> Payslip Master </a>
                            </li> -->
                        </ul>
                    </li>

                    <li
                        class="@php check_actice_or_show([
                        'banks_masters.employer-bank',
                        'banks_masters.salary-bank'
                    ],'active') @endphp">
                        <a href="#pages-error44" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Bank Masters <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error44"
                            data-parent="#pages">
                            <li
                                class="@php check_actice_or_show([
                        'banks_masters.employer-bank',
                    ],'active') @endphp">
                                <a href="{{ route('banks_masters.employer-bank') }}"> Employer Bank </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                        'banks_masters.salary_bank'
                    ],'active') @endphp">
                                <a href="{{ route('banks_masters.salary_bank') }}"> Salary Bank </a>
                            </li>

                        </ul>
                    </li>

                    {{-- <li>
                        <a href="#pages-error7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            Admin Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error7" data-parent="#pages">
                            <li>
                                <a href="#">EPF Masters </a>
                            </li>

                            <li>
                                <a href="#">ESIC Masters </a>
                            </li>
                            <li>
                                <a href="#">PT Masters </a>
                            </li>

                            <li>
                                <a href="#">Income Tax Masters </a>
                            </li>

                        </ul>
                    </li> --}}


                    <li
                        class="@php check_actice_or_show([
                        'assets_masters.category',
                        'assets_masters.assets',
                        'assets_masters.company-assets',
                    ],'active') @endphp">
                        <a href="#pages-error8" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            Asset Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error8"
                            data-parent="#pages">
                            {{-- <li>
                                <a href="{{ route('assets_masters.assets') }}">Assets </a>
                            </li> --}}

                            <li
                                class="@php check_actice_or_show([
                        'assets_masters.category',
                    ],'active') @endphp">
                                <a href="{{ route('assets_masters.category') }}">Category</a>
                            </li>
                            <li>
                                <a href="#">Perk List</a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                        'assets_masters.assets',
                    ],'active') @endphp">
                                <a href="{{ route('assets_masters.assets') }}">Assets Category</a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                        'assets_masters.company-assets',
                    ],'active') @endphp">
                                <a href="{{ route('assets_masters.company-assets') }}"> Comapny Assets </a>
                            </li>
                            <li>
                                <a href="#"> Comapny Perks </a>
                            </li>
                            <li>
                                <a href="#"> Uniform </a>
                            </li>

                        </ul>
                    </li>

                    <li
                        class="@php check_actice_or_show([
                    'statutory_masters.employee-pf',
                        'statutory_masters.esic',
                        'statutory_masters.gratuity',
                        'statutory_masters.income-tax',
                        'statutory_masters.profession-tax',
                        ],'active') @endphp ">
                        <a href="#pages-error18" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            Statutory Masters <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error18"
                            data-parent="#pages">
                            <li
                                class="@php check_actice_or_show([
                    'statutory_masters.employee-pf',                       
                        ],'active') @endphp ">
                                <a href="{{ route('statutory_masters.employee-pf') }}">Employee PF </a>
                            </li>

                            <li
                                class="@php check_actice_or_show([
                  
                        'statutory_masters.profession-tax',
                        ],'active') @endphp ">
                                <a href="{{ route('statutory_masters.profession-tax') }}">Profession Tax</a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                        'statutory_masters.esic',
                        ],'active') @endphp ">
                                <a href="{{ route('statutory_masters.esic') }}"> ESIC </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                       'statutory_masters.income-tax',
                        ],'active') @endphp ">
                                <a href="{{ route('statutory_masters.income-tax') }}"> Income Tax </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                        'statutory_masters.gratuity',
                       ],'active') @endphp ">
                                <a href="{{ route('statutory_masters.gratuity') }}">Gratuity</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>



            <li
                class="menu @php check_actice_or_show([
                'attendance',                       
                    ],'active') @endphp ">
                <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <span>HR Process</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">
                    <li
                        class="@php check_actice_or_show([
                        'attendance',                       
                            ],'active') @endphp ">
                        <a href="{{ url('attendance') }}"> Monthly Attendance </a>
                    </li>
                    <li>
                        <a href="#pages-error22" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Attendance Entry <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error22" data-parent="#pages">
                            <li>
                                <a href="#"> Daily </a>
                            </li>
                            <!--  <li>
                                        <a href="#"> Monthly </a>
                                    </li> -->
                            <li>
                                <a href="#"> Data Import </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#pages-error23" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Leave Application <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error23" data-parent="#pages">
                            <li>
                                <a href="#"> Application </a>
                            </li>

                            <li>
                                <a href="#"> Approval / Disapproval</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#pages-error25" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Salary Process <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error25" data-parent="#pages">
                            <li>
                                <a href="#"> Genearte Salary </a>
                            </li>

                            <li>
                                <a href="#"> Print / Download Salary Name</a>
                            </li>
                            <li>
                                <a href="#"> Process Disbursement </a>
                            </li>

                            <li>
                                <a href="#"> Payslip -View / Print / Download</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#pages-error26" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Core HR <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error26" data-parent="#pages">
                            <li>
                                <a href="#">Offer / Appointment Letter</a>
                            </li>

                            <li>
                                <a href="#"> Asset / Perk Allotment</a>
                            </li>
                            <li>
                                <a href="#"> HR Documents </a>
                            </li>

                            <li>
                                <a href="#"> Exit / F & F Process</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>



            <li class="menu">
                <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-file">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                        <span>Admin Process</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">

                    <li>
                        <a href="#pages-error11" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Inward / Outward <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error11" data-parent="#pages">
                            <li>
                                <a href="#"> Inward </a>
                            </li>
                            <li>
                                <a href="#"> Outward </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#pages-error12" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Events & Meetings <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error12" data-parent="#pages">
                            <li>
                                <a href="#"> Events </a>
                            </li>
                            <li>
                                <a href="#"> Meetings </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#pages-error53" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Training <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error53" data-parent="#pages">
                            <li>
                                <a href="#"> Training List</a>
                            </li>
                            <li>
                                <a href="#"> Training Type </a>
                            </li>
                            <li>
                                <a href="#"> Trainers </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#pages-error03" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Admin Documents <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error03" data-parent="#pages">
                            <li>
                                <a href="#"> Purhchase Order / Work Order</a>
                            </li>
                            <li>
                                <a href="#"> Agreements </a>
                            </li>
                            <li>
                                <a href="#"> Payment Order </a>
                            </li>
                            <li>
                                <a href="#"> Purhchase Invoice Entry</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pages-error33" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Activity Documents <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error33" data-parent="#pages">
                            <li>
                                <a href="#"> Travel Arrangement</a>
                            </li>
                            <li>
                                <a href="#"> Event Arrangement </a>
                            </li>
                            <li>
                                <a href="#"> Meeting </a>
                            </li>
                            <li>
                                <a href="#"> Marketing</a>
                            </li>
                            <li>
                                <a href="#"> Training</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>


            {{-- <li class="menu">
                    <a href="#" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-credit-card">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg>
                            <span>Purchase Order</span>
                        </div>
                    </a>
                </li> --}}


            {{-- <li class="menu">
                    <a href="#components1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-file-plus">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="12" y1="18" x2="12" y2="12"></line>
                                <line x1="9" y1="15" x2="15" y2="15"></line>
                            </svg>
                            <span>Recruitment</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="components1" data-parent="#accordionExample">
                        <li>
                            <a href="#"> Job Post </a>
                        </li>
                        <li>
                            <a href="#"> Job Candidates </a>
                        </li>
                        <li>
                            <a href="#"> Job Interview </a>
                        </li>

                        <li>
                            <a href="#">Interview Schedule</a>
                        </li>
                        <li>
                            <a href="#">Interview Assessment</a>
                        </li>
                        <li>
                            <a href="#pages-error256" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">Recruitment Report<svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="pages-error256" data-parent="#pages">
                                <li>
                                    <a href="#">Candidate List - as Per Criteria</a>
                                </li>

                                <li>
                                    <a href="#"> Interview Report</a>
                                </li>
                                <li>
                                    <a href="#">Joining Report</a>
                                </li>

                                <li>
                                    <a href="#">Interview call Letter</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li> --}}


            {{-- <li class="menu">
                    <a href="#components111" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-book">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                            <span>HR Reports</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="components111" data-parent="#accordionExample">
                        <li>
                            <a href="#"> Payslip Report </a>
                        </li>
                        <li>
                            <a href="#">Attendance Report </a>
                        </li>
                        <li>
                            <a href="#">Monthly Attendance Report</a>
                        </li>
                        <li>
                            <a href="#">Monthly Attendance Report With Time</a>
                        </li>
                        <li>
                            <a href="#"> Training Report </a>
                        </li>
                        <li>
                            <a href="#">Employees Report </a>
                        </li>
                        <li>
                            <a href="#"> Account Report </a>
                        </li>
                        <li>
                            <a href="#">Expense Report </a>
                        </li>
                        <li>
                            <a href="#"> Deposit Report </a>
                        </li>
                        <li>
                            <a href="#">Transaction Report </a>
                        </li>
                        <li>
                            <a href="#">Salary Statement</a>
                        </li>
                        <li>
                            <a href="#">Bank Disbursement</a>
                        </li>

                    </ul>
                </li> --}}

            <li
                class="menu @php check_actice_or_show([
                'event_and_meetings.event',
                'event_and_meetings.meeting',
                'training.training-list',
                        'training.trainer'
                ],'active') @endphp">
                <a href="#components222" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-file">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                        <span>Statutory Reports</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components222" data-parent="#accordionExample">

                    <li>
                        <!-- <a href="#pages-error11" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Inward / Outward <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a> -->
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error11" data-parent="#pages">
                            <li>
                                <a href="#"> PF Reports </a>
                            </li>
                            <li>
                                <a href="ESICmaster.html"> ESIC Repots</a>
                            </li>

                            <li>
                                <a href="#"> PT Repots</a>
                            </li>

                            <li>
                                <a href="#"> LWF Repots</a>
                            </li>
                            <li>
                                <a href="incometaxmaster.html"> Income Tax Repots</a>
                            </li>

                        </ul>
                    </li>
                    <li
                        class="@php check_actice_or_show([
                        'event_and_meetings.event',
                        'event_and_meetings.meeting'
                        ],'active') @endphp">
                        <a href="#pages-error12" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Events & Meetings <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error12"
                            data-parent="#pages">
                            <li
                                class="@php check_actice_or_show([
                'event_and_meetings.event'
                ],'active') @endphp">
                                <a href="{{ route('event_and_meetings.event') }}"> Events </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                'event_and_meetings.meeting'
                ],'active') @endphp">
                                <a href="{{ route('event_and_meetings.meeting') }}"> Meetings </a>
                            </li>

                        </ul>
                    </li>
                    <li
                        class="@php check_actice_or_show([
                        'training.training-list',
                        'training.trainer'
                        ],'active') @endphp">
                        <a href="#pages-error53" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Training <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse submenu list-unstyled sub-submenu" id="pages-error53"
                            data-parent="#pages">
                            <li
                                class="@php check_actice_or_show([
                        'training.training-list',
                        ],'active') @endphp">
                                <a href="{{ route('training.training-list') }}"> Training List</a>
                            </li>
                            <li>
                                <a href="#"> Training Type </a>
                            </li>
                            <li
                                class="@php check_actice_or_show([
                        'training.trainer'
                        ],'active') @endphp">
                                <a href="{{ route('training.trainer') }}"> Trainers </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#pages-error03" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle"> Admin Documents <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error03" data-parent="#pages">
                            <li>
                                <a href="#"> Purhchase Order / Work Order</a>
                            </li>
                            <li>
                                <a href="#"> Agreements </a>
                            </li>
                            <li>
                                <a href="#"> Payment Order </a>
                            </li>
                            <li>
                                <a href="#"> Purhchase Invoice Entry</a>
                            </li>
                        </ul>
                    </li>
                </ul>


            </li>

            <li class="menu @php check_actice_or_show([
                'admin-reports.job-post',
                'admin-reports.expence-report',

                ],'active') @endphp">
                <a href="#components_ar" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-file-plus">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="18" x2="12" y2="12"></line>
                            <line x1="9" y1="15" x2="15" y2="15"></line>
                        </svg>
                        <span>Admin Reports</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components_ar" data-parent="#accordionExample">
                    <li class="@php check_actice_or_show([
                        'admin-reports.job-post',
                        ],'active') @endphp">
                        <a href="{{ route('admin-reports.job-post') }}"> Job Post </a>
                    </li>
                    <li>
                        <a href="#"> Purchase order/work order/ conttract report </a>
                    </li>
                    <li>
                        <a href="#"> Vendor Report </a>
                    </li>

                    <li  class="@php check_actice_or_show([
                        'admin-reports.expence-report',
                        ],'active') @endphp">
                        <a href="{{ route('admin-reports.expence-report') }}">Expences Report</a>
                    </li>
                    <li>
                        <a href="#">Expences /Vendor Dashboard</a>
                    </li>
                    <li>
                        <a href="#pages-error256" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">File Manager<svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error256" data-parent="#pages">
                            <li>
                                <a href="#">Document Management</a>
                            </li>

                            <li>
                                <a href="#"> Password Management</a>
                            </li>
                            <li>
                                <a href="#">Document History</a>
                            </li>



                        </ul>
                    </li>
                </ul>
            </li>

            {{-- <li class="menu">
                    <a href="#components222" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>

                            <span>File Manager</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="components222" data-parent="#accordionExample">
                        <li>
                            <a href="#"> Contract Documents </a>
                        </li>
                        <li>
                            <a href="#"> File Configuration </a>
                        </li>
                        <li>
                            <a href="#"> File Category </a>
                        </li>
                        <li>
                            <a href="#"> Document Category </a>
                        </li>
                        <li>
                            <a href="#">History </a>
                        </li>

                    </ul>
                </li> --}}

            <li class="menu @php check_actice_or_show([
                'general-master.award',
                ],'active') @endphp">
                <a href="#components0112" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-file-plus">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="18" x2="12" y2="12"></line>
                            <line x1="9" y1="15" x2="15" y2="15"></line>
                        </svg>
                        <span>General Master</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components0112" data-parent="#accordionExample">
                    <li class="@php check_actice_or_show([
                        'general-master.award',
                        ],'active') @endphp">
                        <a href="{{ route('general-master.award') }}"> Award Type</a>
                    </li>
                    <li>
                        <a href="#">Warning Type</a>
                    </li>
                    <li>
                        <a href="#"> Termination Type </a>
                    </li>
                    <li>
                        <a href="#">Expenses Type </a>
                    </li>
                    <li>
                        <a href="#">Employee Document Type </a>
                    </li>
                </ul>
            </li>


            <li class="menu @php check_actice_or_show([
                'user_management.user-management',
                ],'active') @endphp">
                <a href="#components015" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-file-plus">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="18" x2="12" y2="12"></line>
                            <line x1="9" y1="15" x2="15" y2="15"></line>
                        </svg>
                        <span>User Management</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components015" data-parent="#accordionExample">
                    <li class="@php check_actice_or_show([
                        'user_management.user-management',
                        ],'active') @endphp">
                        <a href="{{ route('user_management.user-management') }}"> User Management</a>
                    </li>
                    <li>
                        <a href="#">Password Management</a>
                    </li>
                    <li>
                        <a href="#"> Workflow Management </a>
                    </li>
                    <li>
                        <a href="#">Permission Management </a>
                    </li>

                </ul>
            </li>

        </ul>

    </nav>

</div>
