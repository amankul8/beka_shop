function redirectTo(link) {
    window.location.href = link;
}

function showModal(id, image, name, model, collection, sizes, composition, price, minQuantity ) {
    const $modal = $('#product-short-info-modal-window');
    $modal.empty();

    const productInfoWrapper$ =  $('<div>', {
        id: "modal-product-info-wrapper",
        class: 'modal-product-info-wrapper',
    }).appendTo($modal);

    const productInfo$ =  $('<div>', {
        class: 'modal-product-info',
    }).appendTo(productInfoWrapper$);

    const image$ = $('<div>', {
        class: 'modal-image-block'
    }).append(
        $('<img>', {
            src: image,
            alt: ''
        })
    );

    const info$ = $('<div>', {
        class: 'modal-info-block'
    })

    info$.append(
        $('<ul>').append(

            $('<li>').append(
                $('<h5>', {class: 'h5 mb-3'}).text('Характеристики')
            ),
            $('<li>').append(
                $('<strong>').text('Название:'),
                $('<span>').text(name),
            ),
            $('<li>').append(
                $('<strong>').text('Модель:'),
                $('<span>').text(model),
            ),
            $('<li>').append(
                $('<strong>').text('Коллекция:'),
                $('<span>').text(collection),
            ),
            $('<li>').append(
                $('<strong>').text('Размеры:'),
                $('<span>').text(sizes),
            ),
            $('<li>').append(
                $('<strong>').text('Состав:'),
                $('<span>').text(composition),
            ),
            $('<li>').append(
                $('<strong>').text('Цена:'),
                $('<span>').text(price),

            ),
            $('<li>').append(
                $('<strong>').text('Количетво:'),
                $('<span>').text(minQuantity),
            )
        ),
        $('<div>', {class: "modal-link-wrapper"}).append(
            $('<a>', {
                href: '/products/product/' + id
            }).text('Больше информации о товаре')
        )
    );

    productInfo$.append(
        image$,
        info$
    )

    productInfoWrapper$.append(productInfo$);
    $modal.show();
}

function closeModal(event) {
    const $modal = $('#product-short-info-modal-window');

    if ($(event.target).is($('#modal-product-info-wrapper'))) {
        $modal.hide();
    }
}
