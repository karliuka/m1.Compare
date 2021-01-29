# Magento Compare

Disable product compare on your website. Compare Control extension lets you get rid of every trace of product compare with one click.

## Compatibility

Magento CE(EE) 1.6.x, 1.7.x, 1.8.x, 1.9.x

OpenMage LTS 19.4.x

#### Install via Composer

1. Go to installation folder

2. Enter following commands to install module:

    ```bash
    composer require faonni/magento-compare
    ```
   Wait while dependencies are updated.

#### Manual Installation

1. Create a folder {Magento root}/app/code/community/Faonni/Compare

2. Download the corresponding latest version

3. Copy the unzip content to the folder ({Magento root}/app/code/community/Faonni/Compare)

## Usage

### Configuration

*System -> Configuration -> Catalog -> Catalog -> Recently Viewed/Compared Products*.

<img alt="Magento Compare" src="https://karliuka.github.io/m1/compare/config.png" style="width:100%"/>

### Compare Enabled

<img alt="Magento Compare" src="https://karliuka.github.io/m1/compare/compare-enabled.png" style="width:100%"/>

### Compare Enabled and Sidebar Disabled

<img alt="Magento Compare" src="https://karliuka.github.io/m1/compare/compare-sidebar-disabled.png" style="width:100%"/>

### Compare Disabled

<img alt="Magento Compare" src="https://karliuka.github.io/m1/compare/compare-disabled.png" style="width:100%"/>

## Uninstall

Pleace, create backup so you can recover the data at a later time.

#### Uninstall via Composer

1. Go to installation folder

2. Enter following commands to remove:

    ```bash
    composer remove faonni/magento-compare
    ```
#### Manual Uninstall

1. Remove the folder {Magento root}/app/code/community/Faonni/Compare
