(() => {
    const pickerSelects = Array.from(document.querySelectorAll('.id-picker-select'));
    const pickerModals = Array.from(document.querySelectorAll('.id-modal'));

    if (!pickerSelects.length || !pickerModals.length) {
        return;
    }

    let activeModal = null;

    const openKeys = ['Enter', ' ', 'ArrowDown', 'ArrowUp'];

    const getSelectForModal = (modal) => {
        const selectId = modal.dataset.selectId;
        return document.getElementById(selectId);
    };

    const openModal = (modal) => {
        if (activeModal && activeModal !== modal) {
            activeModal.style.display = 'none';
            activeModal.classList.remove('is-open');
            activeModal.setAttribute('aria-hidden', 'true');
        }

        modal.style.display = 'flex';
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
        activeModal = modal;
    };

    const closeModal = (modal) => {
        if (!modal) {
            return;
        }

        modal.style.display = 'none';
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');

        if (activeModal === modal) {
            activeModal = null;
        }

        if (!document.querySelector('.id-modal.is-open')) {
            document.body.classList.remove('modal-open');
        }
    };

    pickerModals.forEach((modal) => {
        closeModal(modal);

        const closeButton = modal.querySelector('.id-modal-close');
        const clearButton = modal.querySelector('.id-modal-clear');
        const selectElement = getSelectForModal(modal);

        if (closeButton) {
            closeButton.addEventListener('click', () => closeModal(modal));
        }

        if (clearButton && selectElement) {
            clearButton.addEventListener('click', () => {
                selectElement.value = '';
                selectElement.dispatchEvent(new Event('change', { bubbles: true }));
                closeModal(modal);
            });
        }

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal(modal);
                return;
            }

            const card = event.target.closest('.id-card');
            if (!card || !selectElement) {
                return;
            }

            selectElement.value = card.dataset.id || '';
            selectElement.dispatchEvent(new Event('change', { bubbles: true }));
            closeModal(modal);
        });
    });

    pickerSelects.forEach((selectElement) => {
        const modalId = selectElement.dataset.modalId;
        const modal = modalId ? document.getElementById(modalId) : null;

        if (!modal) {
            return;
        }

        selectElement.addEventListener('mousedown', (event) => {
            event.preventDefault();
            openModal(modal);
        });

        selectElement.addEventListener('keydown', (event) => {
            if (openKeys.includes(event.key)) {
                event.preventDefault();
                openModal(modal);
            }
        });
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && activeModal) {
            closeModal(activeModal);
        }
    });
})();
