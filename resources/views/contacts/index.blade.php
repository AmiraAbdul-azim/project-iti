@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    width: 60px;
    background: linear-gradient(45deg, #1e3a8a, #007aff);
    height: calc(100vh - 55px);
    position: fixed;
    top: 0px;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    padding: 60px 0;
    z-index: 1000;
}

.icon-btn {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: #0D2F85;
    color: white;
    font-size: 22px;
    border-radius: 50%;
    margin: 10px 0;
    text-decoration: none;
    transition: background 0.3s;
}

.icon-btn:hover {
    background-color: #163fa5;
}

.content {
    margin-left: 80px;
}

.main-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0px;
    background: linear-gradient(45deg, #007aff, #1e3a8a);
    color: #fff;
}

.header-buttons {
    display: flex;
    gap: 15px;
    margin-right: 20px;
}

.header-buttons a {
    padding: 8px 14px;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    transition: background 0.3s;
    background-color: #007bff;
}

.header-buttons a.create {
    background-color: #28a745;
}

.header-buttons a:hover {
    background: rgba(255, 255, 255, 0.15);
    opacity: 0.9;
}

.create-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #28a745;
    padding: 8px 14px;
    border-radius: 6px;
    transition: transform 0.3s ease;
    color: white;
    text-decoration: none;
    overflow: hidden;
}

.create-btn .btn-text {
    max-width: 0;
    opacity: 0;
    transition: max-width 0.3s ease, opacity 0.3s ease;
    white-space: nowrap;
}

.create-btn:hover {
    transform: scale(1.05);
}

.create-btn:hover .btn-text {
    max-width: 120px;
    opacity: 1;
}

.plus-icon {
    font-size: 18px;
    font-weight: bold;
}


h1 {
    text-align: center;
    margin-bottom: 40px;
    padding-top: 50px;
    font-size: 50px;
    color: #0D2F85;
}

h2 {
    margin-bottom: 20px;
    color: #0D2F85;
}

.contacts-container {
    flex: 2;
    min-width: 280px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 5px 5px 5px 5px #1A2A80;
}

.table-container {
    overflow-x: auto;
}

#contacts-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
}

#contacts-table th,
#contacts-table td {
    padding: 15px;
    border-bottom: 1px solid #e0e0e0;
    text-align: left;
    font-size: 14px;
    vertical-align: middle;
}

#contacts-table th {
    background-color: #007bff;
    color: #fff;
    position: sticky;
    top: 0;
}

.name-cell {
    display: flex;
    align-items: center;
    gap: 10px;
}

.name-initial {
    width: 30px;
    height: 30px;
    background-color: #007bff;
    color: white;
    font-weight: bold;
    font-size: 16px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    user-select: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.action-buttons {
    display: flex;
    gap: 5px;
}

.action-buttons a,
.action-buttons form button {
    flex: 1;
    min-width: 70px;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: #fff;
    font-size: 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

.action-buttons a.edit {
    background-color: #28a745;
}

.action-buttons form button.delete {
    background-color: #dc3545;
}

.action-buttons a:hover,
.action-buttons form button:hover {
    opacity: 0.9;
}

.search-box {
    position: relative;
    display: inline-block;
    margin-left: 640px;
}

.search-box input {
    padding: 10px 40px 10px 25px;
    border: 1px solid #ccc;
    border-radius: 50px;
    outline: none;
    font-size: 16px;
}

.search-box i {
    position: absolute;
    left: 5px;
    top: 50%;
    transform: translateY(-50%);
    color: #888;
    cursor: pointer;
}

</style>

<header class="main-header">
    
    <div class="search-box">
  <input type="text" id="searchBox" placeholder="Search...">
  <i class="fas fa-search"></i>
</div>

    <div class="header-buttons">
        <a href="{{ route('contacts.index') }}">All Contacts</a>

        <a href="{{ route('contacts.create') }}" class="create-btn">
            <span class="plus-icon">+</span>
            <span class="btn-text">Create New</span>
        </a>

       
</header>

<h1>Contact Manager</h1>



<div class="navbar">
    <div class="top-icons">
        <!-- أيقونة إضافة -->
        <a href="{{ route('contacts.create') }}" class="icon-btn">
            <i class="fa-solid fa-plus"></i>
        </a>
        <!-- أيقونة الأشخاص -->
        <a href="{{ route('contacts.index') }}" class="icon-btn">
            <i class="fa-solid fa-users"></i>
        </a>
    </div>
</div>

<div class="content">
    <div class="contacts-container">
        <h2>All Contacts</h2>
        

        <div class="table-container">
            <table id="contacts-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Last Updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>
                            <div class="name-cell">
                                <div class="name-initial">
                                    {{ strtoupper(substr($contact->name, 0, 1)) }}
                                </div>
                                <span>{{ $contact->name }}</span>
                            </div>
                        </td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->updated_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="edit">Edit</a>
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    @if($contacts->isEmpty())
                        <tr>
                            <td colspan="5" style="text-align: center;">No contacts found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // وقف الإرسال مؤقتًا

            Swal.fire({
                title: 'هل أنت متأكد؟',
                text: "لن تتمكن من التراجع عن هذا الحذف!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'نعم، احذف',
                cancelButtonText: 'إلغاء'
            }).then((result) => {
                if (result.isConfirmed) {
                    // عرض رسالة تم الحذف
                    Swal.fire({
                        title: 'تم الحذف!',
                        text: 'تم حذف العنصر بنجاح.',
                        icon: 'delete',
                        confirmButtonText: 'حسناً'
                    }).then(() => {
                        form.submit(); // نفّذ الحذف بعد الرسالة الثانية
                    });
                }
            });
        });
    });
});
</script>
@if (session('update'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    icon: 'success',
    title: 'تم التعديل بنجاح',
    text: "{{ session('update') }}",
    showConfirmButton: false,
    timer: 2000
});
</script>
@endif


<script>

  

 

    // تصحيح فلتر البحث ليشمل كل الأعمدة
    document.getElementById('search').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll('#contacts-table tbody tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let match = false;
            cells.forEach(cell => {
                if(cell.textContent.toLowerCase().includes(filter)) {
                    match = true;
                }
            });
            row.style.display = match ? '' : 'none';
        });
    });


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 



</script>

@if (session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    icon: 'success',
    title: 'تمت الإضافة بنجاح',
    text: "{{ session('success') }}",
    showConfirmButton: false,
    timer: 2000
});
</script>
@endif






@endsection

