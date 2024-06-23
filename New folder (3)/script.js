function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
}

function showContactForm() {
    document.getElementById('contact').style.display = 'block';
    scrollToSection('contact');
}
