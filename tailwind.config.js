import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'default': '#1B2128',
                'p-gray': {
                    300: '#959595',
                },
                'p-purple': {
                    300: '#F4EEFB',
                    600: '#7839CD',
                },
                'active': {
                    300: '#E9FFEF',
                    600: '#409261',
                },
                'disabled': {
                    300: '#E4E4E4',
                    600: '#3F3748',
                },
                'pending': {
                    300: '#FFF2DD',
                    600: '#D98634',
                }
            }
        },
    },  
}
