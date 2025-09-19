function toggleAttendance(button) {
    const icon = button.querySelector('i');
    
    if (button.classList.contains('present')) {
        button.classList.remove('present');
        button.classList.add('absent');
        button.innerHTML = '<i class="bi bi-x-circle"></i> Falta';
    } else if (button.classList.contains('absent')) {
        button.classList.remove('absent');
        button.innerHTML = '<i class="bi bi-calendar-check"></i> Aula 1';
    } else {
        button.classList.add('present');
        button.innerHTML = '<i class="bi bi-check-circle"></i> Presente';
    }
    
    button.style.transform = 'scale(0.95)';
    setTimeout(() => {
        button.style.transform = 'scale(1)';
    }, 150);
}