import Swal from 'sweetalert2'
window.Swal = Swal


export function success(msg) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
    Toast.fire({
        icon: "success",
        title: msg,
        iconColor: "#fff",
        color: "#fff",
        background: "#1cbb8c",
    });
}
export function info(msg) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: true,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
    Toast.fire({
        icon: "info",
        title: "Info",
        iconColor: "#fff",
        html: msg,
        color: "#fff",
        background: "#32A1CA",
        confirmButtonColor: "#3085d6",
    });
}
export function error(msg) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: true,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
    Toast.fire({
        icon: "error",
        title: "Erro",
        iconColor: "#fff",
        html: msg,
        color: "#fff",
        background: "#dc3545",
        confirmButtonColor: "#600E0E",
    });
}
