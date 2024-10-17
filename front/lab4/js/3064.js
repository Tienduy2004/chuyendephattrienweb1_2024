
const testimonials = [
    {
        text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.",
        author: "Michelle Walsh, Company"
    },
    {
        text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.",
        author: "JMohammad Al Omayer, Company"
    },
    {
        text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.",
        author: "Ashley Dean, Company"
    }
];

let currentTestimonial = 0;
const testimonialText = document.getElementById('testimonial-text');
const authorName = document.getElementById('author-name');
const profileImages = document.querySelectorAll('.profile-image');
const dots = document.querySelectorAll('.dot');

function updateTestimonial() {
    testimonialText.style.animation = 'none';
    authorName.style.animation = 'none';

    setTimeout(() => {
        testimonialText.textContent = testimonials[currentTestimonial].text;
        authorName.textContent = testimonials[currentTestimonial].author;

        testimonialText.style.animation = '';
        authorName.style.animation = '';

        profileImages.forEach((img, index) => {
            img.classList.toggle('active', index === currentTestimonial);
        });

        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentTestimonial);
        });
    }, 50);
}

function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    updateTestimonial();
}

function setTestimonial(index) {
    currentTestimonial = index;
    updateTestimonial();
}

// Thêm sự kiện click vào các hình ảnh
profileImages.forEach((img, index) => {
    img.addEventListener('click', () => {
        setTestimonial(index);
    });
});

dots.forEach(dot => {
    dot.addEventListener('click', () => {
        const index = parseInt(dot.getAttribute('data-index'));
        setTestimonial(index);
    });
});

setInterval(nextTestimonial, 5000); // Change testimonial every 5 seconds
