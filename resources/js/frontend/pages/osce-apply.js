document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#cbt_pass_date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });
});

// chooseOSCECourse
window.chooseOSCECourse = () => {
    const osceApplyForm = document.getElementById('osceApplyForm');
    const courseId = osceApplyForm.elements['course_id'].value;
    const courseDiscount = osceApplyForm.elements['course_id'].options[osceApplyForm.elements['course_id'].options.selectedIndex].getAttribute('data-discount');
    const courseDiscountMsg = osceApplyForm.elements['course_id'].options[osceApplyForm.elements['course_id'].options.selectedIndex].getAttribute('data-discmsg');
    const payment_type = osceApplyForm.elements['payment_type'].value;
    const scheduleInput = osceApplyForm.elements['schedule_id'];
    const course_discount_offer = document.getElementById('course_discount_offer');
    const course_discount_msg = document.getElementById('course_discount_msg');
    scheduleInput.value = '';

    course_discount_offer.innerHTML = '';
    course_discount_msg.innerHTML = '';
    if (courseDiscount > 0) {
        course_discount_offer.innerHTML = 'Limited Offer';
        if (payment_type > 1) {
            course_discount_msg.innerHTML = courseDiscountMsg;
        }
    }

    for (let opt of scheduleInput.children) {
        opt.style.display = 'none'
    }

    if (courseId.trim() !== '') {
        for (let opt of scheduleInput.children) {
            if (opt.className === 'course-' + courseId) {
                opt.style.display = 'block'
            }
        }
    }
}

// choosePaymentType
window.choosePaymentType = () => {
    const osceApplyForm = document.getElementById('osceApplyForm');
    const courseId = osceApplyForm.elements['course_id'].value;
    const courseDiscount = osceApplyForm.elements['course_id'].options[osceApplyForm.elements['course_id'].options.selectedIndex].getAttribute('data-discount');
    const courseDiscountMsg = osceApplyForm.elements['course_id'].options[osceApplyForm.elements['course_id'].options.selectedIndex].getAttribute('data-discmsg');
    const payment_type = osceApplyForm.elements['payment_type'].value;
    const scheduleInput = osceApplyForm.elements['schedule_id'];
    const course_discount_offer = document.getElementById('course_discount_offer');
    const course_discount_msg = document.getElementById('course_discount_msg');
    scheduleInput.value = '';

    course_discount_offer.innerHTML = '';
    course_discount_msg.innerHTML = '';
    if (courseDiscount > 0 && payment_type > 1) {
        course_discount_msg.innerHTML = courseDiscountMsg;
    }
}

