class Messanger
{
    constructor(message, additionalClass = '')
    {
        this.messageBox = document.createElement('div');
        this.messageBox.classList.add('messagebox');

        if (additionalClass.length) this.messageBox.classList.add(additionalClass);

        this.messageBox.insertAdjacentElement('beforeend', document.createElement('p'));
        this.messageBox.querySelector('p').textContent = message;
    }

    showMessage()
    {
        document.body.insertAdjacentElement('beforeEnd', this.messageBox);

        setTimeout(this.destroyMessage, 3 * 1000); // 3 seconds
    }

    destroyMessage()
    {
        document.body.querySelector('.messagebox').remove();
    }
}