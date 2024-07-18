/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
  safelist: [
    'bg-black',
    'translate-y-24',
    '-translate-x-32',
    'bg-red-500',
    'ml-auto',
    'text-red-500',
    'bg-red-800',
    'bg-blue-900',
    'text-blue-900',
    'text-3xl',
    'border-[#b69f5c]',
    'text-sky-600',
  ]
}

