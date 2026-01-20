window.toast = function (message, options = {}) {
    window.dispatchEvent(
        new CustomEvent('toast-show', {
            detail: {
                message,
                description: options.description ?? '',
                type: options.type ?? 'default',
                position: options.position ?? 'top-right',
                timeout: options.timeout ?? 10000,
            },
        })
    );
};
