# Release Notes

## v1.5.1 (2021-09-01)
### Added
- Additional transaction data displayed when successfull payment

## v1.5.0 (2021-08-21)
### Added
- Transaction data displayed when successfull payment
- Message displayed when transaction declined
- Serbian translation added
- HPP language as per choosen language code

## v1.4.0 (2020-02-12)
### Added
- Gateway callback validation
### Changed
- Remove order status changes from gateway response handling - handled in callback
- Remove superfluous payment gateway response error output
### Fixed
- Missing cc input overflow obfuscating border
- CCV -> CVV typo  

## v1.3.1 (2020-01-20)

### Fixed
- Postback callback URL card type assignment

## v1.3.0 (2020-01-14)

### Added
- Preauthorize/Capture/Void
### Changed
- Order ID suffix to prevent TX ID conflicts

## v1.2.2 (2019-12-10)
### Fixed
- Gateway client PHP 7.3 compatibility: remove redundant filter_var FILTER_VALIDATE_URL flags

## v1.2.1 (2019-09-16)

### Fixed
- Autoload import path in module controller

## v1.2.0 (2019-09-10)
### Added
- enabling  additional language files
### Changed
- Display title, gateway API username & password 

## v1.1.0 (2019-09-04)
### Added
- 3D Secure 2.0 extra data
- Pre-select the only card option if only one present

## v1.0.0 (2019-08-30)
### Added
- Readme.txt with instructions
- [CHANGELOG](CHANGELOG.md)

## 2019-07-09
### Added
- Configuration values for card types
- Seamless integration option

## 2019-07-05
### Added
- Module & payment extension
- Credit card payment with redirect flow
