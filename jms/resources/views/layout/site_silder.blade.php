<div id="dw-s1" class="bmd-layout-drawer bg-faded">

    <div class="container-fluid side-bar-container">
        <header class="pb-0">
            <a class="navbar-brand">
                <object class="side-logo" data="{{ asset('assets/svg/logo-8.svg') }}" type="image/svg+xml">
                </object>
            </a>
        </header>
        <p class="side-comment">Tour</p>
        <!-- <li class="side a-collapse short ">
            <a href="./fa.html" class="side-item "><i class="fas fa-language mr-1"></i>Persian <span
                    class="badge badge-pill badge-success">new</span></a>
        </li> -->
        <li class="side a-collapse short ">
            <a href="{{ route('dashboard') }}" class="side-item selected"><i class="fas fa-home mr-1"></i>Dashboard</a>
        </li>

        {{-- <ul class="side a-collapse short">
            <a class="ul-text"><i class="fab fa-usps mr-1"></i> Posts
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container ">
                <li class="side-item "><a href="./"><i class="fas fa-angle-right mr-2"></i>Dashboard</a>
                </li>
                <li class="side-item"><a href="./dark.html"><i class="fas fa-angle-right mr-2"></i>Dark
                        Dashboard</a></li>
                <li class="side-item"><a href="./Login.html"><i class="fas fa-angle-right mr-2"></i>Login</a>
                </li>
                <li class="side-item"><a href="./glogin.html"><i class="fas fa-angle-right mr-2"></i>Login
                        Colored</a></li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fas fa-scroll mr-1"></i> Pages
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container ">
                <li class="side-item"><a href="./"><i class="fas fa-angle-right mr-2"></i>Dashboard</a>
                </li>
                <li class="side-item"><a href="./dark.html"><i class="fas fa-angle-right mr-2"></i>Dark
                        Dashboard</a></li>
                <li class="side-item"><a href="./Login.html"><i class="fas fa-angle-right mr-2"></i>Login</a>
                </li>
                <li class="side-item"><a href="./glogin.html"><i class="fas fa-angle-right mr-2"></i>Login
                        Colored</a></li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fab fa-slideshare mr-1"></i> Slider
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container">
                <li class="side-item"><a href="./"><i class="fas fa-angle-right mr-2"></i>Dashboard</a>
                </li>
                <li class="side-item"><a href="./dark.html"><i class="fas fa-angle-right mr-2"></i>Dark
                        Dashboard</a></li>
                <li class="side-item"><a href="./Login.html"><i class="fas fa-angle-right mr-2"></i>Login</a>
                </li>
                <li class="side-item"><a href="./glogin.html"><i class="fas fa-angle-right mr-2"></i>Login
                        Colored</a></li>
            </div>
        </ul> --}}

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fa fa-users" aria-hidden="true"></i> Customers
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container">
                <li class="side-item"><a href="{{ route('customers.index') }}"><i
                            class="fas fa-angle-right mr-2"></i>All Customers</a>
                </li>
                <li class="side-item"><a href="{{ route('customers.create') }}"><i
                            class="fas fa-angle-right mr-2"></i>Add Customer</a></li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fab fa-slideshare mr-1"></i> Invoices
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container">
                <li class="side-item"><a href="{{ route('invoices.index') }}"><i class="fas fa-angle-right mr-2"></i>All
                        Invoice</a>
                </li>
                <li class="side-item"><a href="{{ route('invoices.create') }}"><i
                            class="fas fa-angle-right mr-2"></i>Add Invoice</a></li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fab fa-slideshare mr-1"></i> Gold Transactions
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container">
                <li class="side-item"><a href="{{ route('gold_transactions.index') }}"><i
                            class="fas fa-angle-right mr-2"></i>All Gold
                        Transactions</a>
                </li>
                <li class="side-item"><a href="{{ route('gold_transactions.create') }}"><i
                            class="fas fa-angle-right mr-2"></i>Add
                        Transaction</a></li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fab fa-slideshare mr-1"></i> Balance
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container">
                <li class="side-item"><a href="{{ route('balances.index') }}"><i class="fas fa-angle-right mr-2"></i>All
                        Balance
                        Transactions</a>
                </li>
                <li class="side-item"><a href="{{ route('balances.create') }}"><i
                            class="fas fa-angle-right mr-2"></i>Add
                        Balance</a></li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fas fa-users-cog mr-1"></i> Employee Management
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="{{ route('employees.create') }}"><i
                            class="fas fa-angle-right mr-2"></i>Create Employee</a>
                </li>
                <li class="side-item"><a href="{{ route('employees.index') }}"><i
                            class="fas fa-angle-right mr-2"></i>All
                        Users</a></li>
                {{-- <li class="side-item"><a href="{{ route('users.add-role') }}"><i class="fas fa-angle-right mr-2"></i>New
                        Role</a></li>
                <li class="side-item"><a href="{{ route('users.all-role') }}"><i class="fas fa-angle-right mr-2"></i>All
                        Roles</a></li> --}}
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fas fa-users-cog mr-1"></i> Products
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="{{ route('product.create') }}"><i
                            class="fas fa-angle-right mr-2"></i>Create Product</a>
                </li>
                <li class="side-item"><a href="{{ route('product.index') }}"><i class="fas fa-angle-right mr-2"></i>All
                        Product</a></li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fas fa-th-list mr-1"></i> Categories
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="./color.html"><i class="fas fa-angle-right mr-2"></i>Color</a>
                </li>
                <li class="side-item"><a href="./typo.html"><i class="fas fa-angle-right mr-2"></i>Typography</a>
                </li>
                <li class="side-item"><a href="./dark-mode.html"><i class="fas fa-angle-right mr-2"></i>Dark
                        Mode</a></li>
                <li class="side-item"><a href="./rtl.html"><i class="fas fa-angle-right mr-2"></i>Rtl</a></li>
                <li class="side-item"><a href="./sidebar.html"><i class="fas fa-angle-right mr-2"></i>SideBar</a>
                </li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fas fa-bars mr-1"></i> Menu
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="./color.html"><i class="fas fa-angle-right mr-2"></i>Color</a>
                </li>
                <li class="side-item"><a href="./typo.html"><i class="fas fa-angle-right mr-2"></i>Typography</a>
                </li>
                <li class="side-item"><a href="./dark-mode.html"><i class="fas fa-angle-right mr-2"></i>Dark
                        Mode</a></li>
                <li class="side-item"><a href="./rtl.html"><i class="fas fa-angle-right mr-2"></i>Rtl</a></li>
                <li class="side-item"><a href="./sidebar.html"><i class="fas fa-angle-right mr-2"></i>SideBar</a>
                </li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fab fa-slideshare mr-1"></i> Order
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="{{ route('product.index') }}"><i
                            class="fas fa-angle-right mr-2"></i>All Order</a>
                </li>
                <li class="side-item">
                    <a href="{{ route('product.create') }}">
                        <i class="fas fa-angle-right mr-2"></i>Add Order</a>
                </li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fas fa-cog fa-spin mr-1"></i> Setting
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="./updateSetting.html"><i class="fas fa-angle-right mr-2"></i>Update
                        Setting</a>
                </li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fas fa-users-cog mr-1"></i> User Management
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="{{ route('users.create') }}"><i
                            class="fas fa-angle-right mr-2"></i>Create New User</a>
                </li>
                <li class="side-item"><a href="{{ route('users.index') }}"><i
                            class="fas fa-angle-right mr-2"></i>All
                        Users</a></li>
                {{-- <li class="side-item"><a href="{{ route ('users.add-role') }}"><i class="fas fa-angle-right mr-2"></i>New Role</a></li> --}}
                {{-- <li class="side-item"><a href="{{ route ('users.all-role') }}"><i class="fas fa-angle-right mr-2"></i>All Roles</a></li> --}}
            </div>
        </ul>
    </div>

</div>
