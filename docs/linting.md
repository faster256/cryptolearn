# Linting Documentation

## Обрані лінтери
- PHP_CodeSniffer (стиль коду PHP)
- PHPStan (статичний аналіз PHP)
- ESLint (JavaScript)
- Stylelint (CSS)
- HTMLHint (HTML)

## Базові правила
- Відступи: 2 пробіли
- Лапки: подвійні
- Крапка з комою: обов’язкова
- Унікальні id у HTML
- PSR-12 стандарт для PHP

## Запуск
- PHP_CodeSniffer: `vendor/bin/phpcs`
- PHPStan: `vendor/bin/phpstan analyse`
- ESLint: `npx eslint .`
- Stylelint: `npx stylelint "**/*.css"`
- HTMLHint: `npx htmlhint "**/*.html"`

## Pre-commit hook
У файлі `.git/hooks/pre-commit`:
```bash
#!/bin/sh
npm run lint
vendor/bin/phpcs
vendor/bin/phpstan analyse
