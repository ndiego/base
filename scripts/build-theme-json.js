const fs = require('fs');
const path = require('path');

// Base theme.json structure
const baseConfig = require('../src/json/base.json');

// Function to strip schema and version
function stripMetadata(jsonData) {
    const { $schema, version, ...cleanData } = jsonData;
    return cleanData;
}

// Function to read and parse JSON file
function readJsonFile(filePath) {
    try {
        const jsonData = JSON.parse(fs.readFileSync(filePath, 'utf8'));
        return stripMetadata(jsonData);
    } catch (error) {
        console.error(`Error reading ${filePath}:`, error);
        return {};
    }
}

// Enhanced deep merge function to handle arrays
function deepMerge(target, source) {
    for (const key in source) {
        if (source[key] instanceof Object) {
            if (Array.isArray(source[key])) {
                // If it's an array, replace it entirely
                target[key] = source[key];
            } else if (key in target) {
                // If it's an object and exists in target, merge recursively
                target[key] = deepMerge(target[key], source[key]);
            } else {
                // If it's an object but doesn't exist in target, copy it
                target[key] = source[key];
            }
        } else {
            // For primitive values, simply replace
            target[key] = source[key];
        }
    }
    return target;
}

// Function to combine JSON files in a directory
function combineJsonFiles(dirPath) {
    let result = {};
    
    try {
        const files = fs.readdirSync(dirPath);
        
        files.forEach(file => {
            if (file.endsWith('.json')) {
                const filePath = path.join(dirPath, file);
                console.log(`Processing: ${filePath}`);
                const jsonData = readJsonFile(filePath);
                
                // Extract the relevant section (settings or styles)
                const section = jsonData.settings || jsonData.styles || {};
                result = deepMerge(result, section);
            }
        });
    } catch (error) {
        console.error(`Error reading directory ${dirPath}:`, error);
    }
    
    return result;
}

// Build final theme.json
function buildThemeJson() {
    try {
        // Combine all settings files
        console.log('Processing settings...');
        const settings = combineJsonFiles(path.join(__dirname, '../src/json/settings'));
        baseConfig.settings = settings;

        // Combine all styles files
        console.log('Processing styles...');
        const styles = combineJsonFiles(path.join(__dirname, '../src/json/styles'));
        baseConfig.styles = styles;

        // Write final theme.json with tab indentation
        const outputPath = path.join(__dirname, '../theme.json');
        fs.writeFileSync(
            outputPath,
            JSON.stringify(baseConfig, null, '\t')
        );
        console.log(`Successfully created theme.json at ${outputPath}`);
    } catch (error) {
        console.error('Error building theme.json:', error);
        process.exit(1);
    }
}

buildThemeJson(); 