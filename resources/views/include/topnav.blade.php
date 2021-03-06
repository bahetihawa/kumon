<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:voide(0)">Organizer
     <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/organiger/catagories') }}">Categories</a></li>
        <!--li><a href="{{ url('organiger/levels') }}">Wks Levels</a></li-->
        <li><a href="{{ url('/organiger/Items') }}">Items</a></li>
        <!--li><a href="{{ url('/addItemList') }}">Add Bulk Items</a></li-->
    </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:voide(0)">Inventory
     <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ route('inventory.stockWarehouses',['store'=>0]) }}">Stock @ Warehouses : CI,NCI,Bags</a></li>
        <li><a href="{{ route('inventory.wksLevel',['store'=>0]) }}">Stock @ Warehouses : Wks Level Wise</a></li>
        <li><a href="{{ route('inventory.wks',['store'=>0]) }}">Stock @ Warehouses : Wks Item Wise</a></li>
        <li><a href="{{ url('inventory/orders/0') }}">Purchases</a></li>
        <!--li><a href="{{ url('inventory/stockCenters') }}">Stock @ Centers</a></li>
        <!--li><a href="{{ url('inventory/create') }}">New Stock</a></li-->
        <!--li><a href="{{ url('inventory/transfer') }}">Stock : Transfer @ Warehouses</a></li>
        <li><a href="{{ url('inventory/render') }}">Stock : Render to Center</a></li-->
    </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:voide(0)">Stock Status
     <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
         <li><a href="javascript:void(0)" data-toggle="modal" data-target="#opening">Closing Stock Month Wise</a></li>
        <!--li><a href="{{ url('stockStatusAll') }}">Download Stock Status</a></li-->
       
    </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:voide(0)">Users
     <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/register') }}">New Account</a></li>
        <li><a href="{{ url('/users/accounts') }}">Accounts</a></li>
        <li><a href="{{ url('/users/integration') }}">Warehouse & Center integration</a></li>
        <li><a href="{{ url('/users/activitylog') }}">Activity Logs</a></li>
    </ul>
</li>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:voide(0)">Set Up
     <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/setup/locations') }}">Locations</a></li>
        <li><a href="{{ url('/setup/centers') }}">Centers</a></li>
        <li><a href="{{ url('/setup/warehouses') }}">Warehouses</a></li>
    </ul>
</li>


<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:voide(0)">Backup/Restore
     <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="{{route('backup')}}">Backup</a></li>
        <li><a href="{{ route('restore') }}">Restore</a></li>
        
    </ul>
</li>