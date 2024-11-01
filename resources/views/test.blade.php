<h1>This is page test</h1>
<ul>
    <li><a href="./user">User</a></li>
    <li><a href="./product">Product</a></li>
    <li><a href="./news">News</a></li>
    <li><a href="./service">Service</a></li>
</ul>

<br>

<ul>
    <li><a href="./news/1/category/100">Bai viet so 1</a></li>
    <li><a href="./news/2/category/102">Bai viet so 2</a></li>
    <li><a href="./news/3/category/103">Bai viet so 3</a></li>
    <li><a href="./news/4/category/104">Bai viet so 4</a></li>
    <li><a href="./news/5/category/105">Bai viet so 5</a></li>
</ul>


<ul>
    <li><a href="{{ route('user') }}">user so 1</a></li>
    <li><a href="{{ route('user') }}">user so 2</a></li>
    <li><a href="{{ route('user') }}">user so 3</a></li>
    <li><a href="{{ route('user') }}">user so 4</a></li>
    <li><a href="{{ route('user') }}">user so 5</a></li>
</ul>
<h2>Route name co tham so truyen vao</h2>

<ul>
    <li><a href="{{ route('user.show',['id' => 'test']) }}">user so 1</a></li>
    <li><a href="{{ route('user.show',['id' => 'ok']) }}">user so 2</a></li>
    <li><a href="{{ route('user.show',['id' => 'what']) }}">user so 3</a></li>
    <li><a href="{{ route('user.show',['id' => 'why']) }}">user so 4</a></li>
    <li><a href="{{ route('user.show',['id' => 'when']) }}">user so 5</a></li>
</ul>

<h2>Route name co tham so truyen vao</h2>

<ul>
    <li><a href="{{ route('user.show.brand',['id' => 1, 'branchID' => 1]) }}">user by branch so 1</a></li>
    <li><a href="{{ route('user.show.brand',['id' => 2, 'branchID' => 2]) }}">user by branch so 2</a></li>
    <li><a href="{{ route('user.show.brand',['id' => 3, 'branchID' => 3]) }}">user by branch so 3</a></li>
    <li><a href="{{ route('user.show.brand',['id' => 4, 'branchID' => 4]) }}">user by branch so 4</a></li>
    <li><a href="{{ route('user.show.brand',['id' => 5, 'branchID' => 5]) }}">user by branch so 5</a></li>
</ul>


<ul>
    <li><a href="{{ route('backend.user',['id', 'branchID' => 1]) }}">User management </a></li>
    <li><a href="{{ route('backend.product',['id', 'branchID' => 2]) }}">Product management</a></li>
    <li><a href="{{ route('backend.category',['id', 'branchID' => 3]) }}">Category management</a></li>
    <li><a href="{{ route('backend.news',['id', 'branchID' => 4]) }}">News management</a></li>
</ul>