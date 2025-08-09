
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<?php $__env->startSection('content'); ?>
<style>
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

/* عناصر أساسية */
h1 {
    text-align: center;
    margin-bottom: 20px;
    padding-top: 20px;
    font-size: 50px;
    color: #0D2F85;
}

.main {
    margin-left: 60px;
    padding: 20px;
}

.title {
    margin: 10px;
    font-size: 22px;
    font-weight: bold;
    color: #1e3a8a;
}

.container {
    margin: 0 auto;
    padding: 20px;
    width: 950px;
    background: linear-gradient(45deg, #1e3a8a, #007aff);
}

/* الفورم */
form {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgb(46, 71, 139);
}

.styled-form {
    max-width: 950px;
    margin: auto;
}

.form-group {
    margin-bottom: 2rem;
    position: relative;
}

.form-group label {
    display: block;
    margin-bottom: 0.75rem;
    color: #5a3921;
    font-weight: 600;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 1rem;
    border: 2px solid #e0d7d0;
    border-radius: 10px;
    font-size: 1rem;
    background: #fffbf7;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.form-group textarea {
    resize: none;
}

.input-icon {
    position: absolute;
    right: 15px;
    top: 42px;
    color: #8d5e3f;
}

.form-actions {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    margin-top: 2.5rem;
}

.save-btn,
.cancel-btn {
    border-radius: 10px;
    padding: 0.8rem 2rem;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}

.save-btn {
    background: #8d5e3f;
    color: white;
    border: none;
    box-shadow: 0 4px 8px rgba(141,94,63,0.2);
}

.save-btn:hover {
    background: #6f462e;
    box-shadow: 0 6px 12px rgba(141,94,63,0.3);
}

.cancel-btn {
    background: transparent;
    color: #8d5e3f;
    border: 2px solid #8d5e3f;
    box-shadow: 0 4px 8px rgba(141,94,63,0.1);
}

.cancel-btn:hover {
    background: #8d5e3f;
    color: white;
    box-shadow: 0 6px 12px rgba(141,94,63,0.2);
}

/* النافبار */
.navbar {
    width: 60px;
    background: linear-gradient(45deg, #1e3a8a, #007aff);
    position: fixed;
    top: 0px;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    padding: 60px 0;
    z-index: 1000;
    height: calc(100vh - 55px);
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

/* الهيدر */
.main-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 10px 0px;
    background: linear-gradient(45deg, #007aff, #1e3a8a);
    color: #fff;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding: 0 20px;
}

.header-buttons {
    display: flex;
    gap: 15px;
    margin-right: 20px;
}

.header-buttons a {
    background-color: #007bff;
    color: #fff;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    transition: background 0.3s;
}

.header-buttons a:hover {
    background: rgba(255, 255, 255, 0.15);
    opacity: 0.9;
}

/* زر إنشاء جديد */
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





</style>

<!-- navbar -->
 <header class="main-header">
  

    <div class="header-buttons">
        <a href="<?php echo e(route('contacts.index')); ?>">All Contacts</a>

        <a href="<?php echo e(route('contacts.create')); ?>" class="create-btn">
            <span class="plus-icon">+</span>
            <span class="btn-text">Create New</span>
        </a>

    </div>
</header>

<h1 style="margin-top: 70px; text-align:center;">Contact Add</h1>
<div class="navbar">
    <div class="top-icons">
        <a href="<?php echo e(route('contacts.create')); ?>" class="icon-btn"><i class="fa-solid fa-plus"></i></a>
        <a href="<?php echo e(route('contacts.index')); ?>" class="icon-btn"><i class="fa-solid fa-users"></i></a>
    </div>
</div>

<div class="main">

    <div class="container">
       <form action="<?php echo e(route('contacts.store')); ?>" method="POST" id="contactForm" class="styled-form">
    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
        <span class="input-icon"><i class="fas fa-user"></i></span>
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>">
        <span class="input-icon"><i class="fas fa-envelope"></i></span>
    </div>

    <div class="form-group">
        <label for="phone">Mobile Number</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{11}" value="<?php echo e(old('phone')); ?>" required>
        <span class="input-icon"><i class="fas fa-phone"></i></span>
    </div>

    <div class="form-group">
        <label for="notes">Additional Notes</label>
        <textarea id="notes" name="notes" rows="4"><?php echo e(old('notes')); ?></textarea>
        <span class="input-icon"><i class="fas fa-sticky-note"></i></span>
    </div>

    <div class="form-actions">
        <button type="submit" class="save-btn">
            <i class="fas fa-save"></i> Save
        </button>
        <a href="<?php echo e(route('contacts.index')); ?>" class="cancel-btn">
            <i class="fas fa-times"></i> Cancel
        </a>
    </div>
</form>


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if($errors->any()): ?>
<script>

   



Swal.fire({
    icon: 'error',
    title: 'حدث خطأ!',
    html: `<?php echo implode('<br>', $errors->all()); ?>`,
    confirmButtonText: 'تمام',
    confirmButtonColor: '#1e3a8a'
});
</script>
<?php endif; ?>


<?php if(session('success')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'تم الحفظ بنجاح',
    text: "<?php echo e(session('success')); ?>",
    showConfirmButton: true,
    confirmButtonText: 'تمام',
    confirmButtonColor: '#1e3a8a',
    timer: 3000
});
</script>
<?php endif; ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\LOQ\myapp\resources\views/contacts/create.blade.php ENDPATH**/ ?>