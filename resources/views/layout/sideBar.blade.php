    <style>
.custom-list {
    width: 300px;
    margin: 0 auto;
    border: 2px solid #ffa200;
    padding: 20px;
}

.custom-list .list-group-item {
    background-color: #ffa200;
    color: #fff;
}

.list-group-item:hover {
    background-color: white;
    color: black;
}

.custom-list .list-group-item+.list-group-item {
    margin-top: 5px;
}
    </style>
    <ul class="list-group custom-list rounded-0 mt-5">
        <li class="list-group-item text-center">Category</li>
        <li class="list-group-item text-center">Brand</li>
        <li class="list-group-item text-center">Item 3</li>
        <li class="list-group-item text-center">Item 4</li>
        <li class="list-group-item text-center">Item 5</li>
    </ul>