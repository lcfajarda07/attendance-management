<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pt-3 pb-3 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="ml-6" id="time" style="display: inline-block;">
                 </div> <a id='ampm'></a>
                    <!-- <h1 class="ml-4" style="font-size:40px;"><strong>Users List</strong></h1>  -->
                </div>
        </div>
    </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="row">
                    <div class="col">
                        <h1 class="ml-2" style="font-size:20px;"><strong>Users</strong></h1> 
                    </div>
                    <div class="col-auto">
                         <button type="button" class="btn btn-warning mb-1">Add User</button>
                        <button type="button" class="btn btn-success mb-1">Export Excel</button>
                    </div>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Date Joined</th>
                        <th>Active Status</th>
                        <th>Actions</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Lemuel Fajarda</td>
                        <td>lcfajarda@lifeacademy.edu.ph</td>
                        <td>Regular</td>
                        <td>03/05/2024</td>
                        <td>active</td>
                        <td><button type="button" class="btn btn-info">Update</button></td>
                        </tr>
                        <tr>
                        <td>Don Balbieran</td>
                        <td>dcbalbieran@lifeacademy.edu.ph</td>
                        <td>Admin</td>
                        <td>02/05/2024</td>
                        <td>active</td>
                        <td><button type="button" class="btn btn-info">Update</button></td>
                        </tr>
                        <tr>
                        <td>Kenna Babon</td>
                        <td>kennababon@lifeacademy.edu.ph</td>
                        <td>Admin</td>
                        <td>02/05/2024</td>
                        <td>active</td>
                        <td><button type="button" class="btn btn-info">Update</button></td>
                        </tr>
                        <tr>
                        <td>Kris Tatoy</td>
                        <td>kennababon@lifeacademy.edu.ph</td>
                        <td>Admin</td>
                        <td>02/05/2024</td>
                        <td>active</td>
                        <td><button type="button" class="btn btn-info">Update</button></td>
                        </tr>
                        <tr>
                        <td>Bea Moral</td>
                        <td>kennababon@lifeacademy.edu.ph</td>
                        <td>Admin</td>
                        <td>02/05/2024</td>
                        <td>active</td>
                        <td><button type="button" class="btn btn-info">Update</button></td>
                        </tr>
                        <tr>
                        <td>Warren Banacia</td>
                        <td>kennababon@lifeacademy.edu.ph</td>
                        <td>Regular</td>
                        <td>02/05/2024</td>
                        <td>active</td>
                        <td><button type="button" class="btn btn-info">Update</button></td>
                        </tr>
                    </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                 </nav>
                </div>
            </div>
        </div>



    
</x-app-layout>
