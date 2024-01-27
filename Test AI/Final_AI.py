#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
import tensorflow as tf
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder

# Load the Generic Dataset
generic_dataset = pd.read_csv("Generic_Dataset.csv")

# Preprocess Generic Dataset
X_generic = generic_dataset.iloc[:, :20].values
y_generic = generic_dataset.iloc[:, 20].values

# Encode labels
label_encoder_generic = LabelEncoder()
y_generic_encoded = label_encoder_generic.fit_transform(y_generic)

# Split the data into training and testing sets
X_generic_train, X_generic_test, y_generic_train, y_generic_test = train_test_split(
    X_generic, y_generic_encoded, test_size=0.2, random_state=42
)

# Build and train the first AI model
model_generic = tf.keras.Sequential([
    tf.keras.layers.Input(shape=(20,)),
    tf.keras.layers.Dense(80, activation='relu'),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dense(1, activation='softmax')  # Adjust the number of classes
])

model_generic.compile(optimizer='adamax', loss='sparse_categorical_crossentropy', metrics=['accuracy'])
model_generic.fit(X_generic_train, y_generic_train, epochs=5, validation_data=(X_generic_test, y_generic_test))

# Save the model for future use
model_generic.save("model_generic.h5")

# Load the first dataset for parallel AI 1
data_1 = pd.read_csv("data_1_test.csv")

# Preprocess data_1
X_data_1 = data_1.iloc[:, :14].values
y_data_1 = data_1.iloc[:, 14].values

# Encode labels if needed
label_encoder_data_1 = LabelEncoder()
y_data_1_encoded = label_encoder_data_1.fit_transform(y_data_1)

# Build and train the first parallel AI model
model_parallel_1 = tf.keras.Sequential([
    tf.keras.layers.Input(shape=(14,)),
    tf.keras.layers.Dense(64, activation='relu'),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dense(4, activation='softmax')  # Adjust the number of classes
])

model_parallel_1.compile(optimizer='adam', loss='sparse_categorical_crossentropy', metrics=['accuracy'])
model_parallel_1.fit(X_data_1, y_data_1_encoded, epochs=100)

# Save the model for future use
model_parallel_1.save("model_parallel_1.h5")

# Load the second dataset for parallel AI 2
data_2 = pd.read_csv("data_2.csv")

# Preprocess data_2
X_data_2 = data_2.iloc[:, :5].values
y_data_2 = data_2.iloc[:, 5].values

# Encode labels if needed
label_encoder_data_2 = LabelEncoder()
y_data_2_encoded = label_encoder_data_2.fit_transform(y_data_2)

# Build and train the second parallel AI model
model_parallel_2 = tf.keras.Sequential([
    tf.keras.layers.Input(shape=(5,)),
    tf.keras.layers.Dense(64, activation='relu'),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dense(4, activation='softmax')  # Adjust the number of classes
])

model_parallel_2.compile(optimizer='adam', loss='sparse_categorical_crossentropy', metrics=['accuracy'])
model_parallel_2.fit(X_data_2, y_data_2_encoded, epochs=50)

# Save the model for future use
model_parallel_2.save("model_parallel_2.h5")

# Combine the outputs of parallel AI 1 and AI 2 for the third AI
output_parallel_1 = model_parallel_1.predict(X_data_1)
output_parallel_2 = model_parallel_2.predict(X_data_2)

# Choose the minimum number of rows for concatenation
min_rows = min(output_parallel_1.shape[0], output_parallel_2.shape[0])

# Subset the outputs to have the same number of rows
output_parallel_1 = output_parallel_1[:min_rows]
output_parallel_2 = output_parallel_2[:min_rows]

# Concatenate the outputs
combined_output = tf.keras.layers.Concatenate()([output_parallel_1, output_parallel_2])

# Convert to Pandas DataFrames
output_df1 = pd.DataFrame(output_parallel_1)
output_df2 = pd.DataFrame(output_parallel_2)

# Save combined outputs to CSV
output_df1.to_csv("data_watch1.csv", index=False)
output_df2.to_csv("data_watch2.csv", index=False)

# Convert parallel AI 1 output to a single column (scaling down)
scaled_output_parallel_1 = output_parallel_1.argmax(axis=1)

# Convert parallel AI 2 output to a single column (scaling down)
scaled_output_parallel_2 = output_parallel_2.argmax(axis=1)

# Save scaled outputs along with labels to CSV
scaled_output_df1 = pd.DataFrame({'label': y_data_1_encoded[:min_rows], 'scaled_output': scaled_output_parallel_1})
scaled_output_df1.to_csv("scaled_output1.csv", index=False)

scaled_output_df2 = pd.DataFrame({'label': y_data_2_encoded[:min_rows], 'scaled_output': scaled_output_parallel_2})
scaled_output_df2.to_csv("scaled_output2.csv", index=False)

# Save the combined output to CSV
combined_output_df = pd.DataFrame(combined_output.numpy())
combined_output_df.to_csv("combined_output.csv", index=False)

# Define num_classes_data_3 after combining outputs
num_classes_data_3 = 4  # Replace with the actual number of classes for the third dataset

# Build and train the third AI model
model_combined = tf.keras.Sequential([
    tf.keras.layers.Input(shape=(combined_output.shape[1],)),
    tf.keras.layers.Dense(64, activation='relu'),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dense(num_classes_data_3, activation='softmax')  # Adjust the number of classes
])

# Load the third dataset for the final AI
data_3 = pd.read_csv("generated_data1.csv")

# Preprocess data_3
X_data_3 = data_3.iloc[:, :-1].values
y_data_3 = data_3.iloc[:, -1].values

# Encode labels if needed
label_encoder_data_3 = LabelEncoder()
y_data_3_encoded = label_encoder_data_3.fit_transform(y_data_3)

# Compile the model
model_combined.compile(optimizer='adam', loss='sparse_categorical_crossentropy', metrics=['accuracy'])

# Train the model using only the third dataset
model_combined.fit(X_data_3, y_data_3_encoded, epochs=100, validation_split=0.2)

# Save the output of the final AI to CSV
final_output = model_combined.predict(X_data_3)
final_output_df = pd.DataFrame(final_output)
final_output_df.to_csv("final_output.csv", index=False)  # Save final output to "final_output.csv"

# Save the model for future use
model_combined.save("model_combined.h5")


# In[ ]:





# In[4]:


# Load the original datasets used for training
data_generic = pd.read_csv("Generic_Dataset.csv")
data_parallel_1 = pd.read_csv("data_1.csv")
data_parallel_2 = pd.read_csv("data_2.csv")

# Get unique labels from each dataset
unique_labels_generic = data_generic.iloc[:, 20].unique()
unique_labels_parallel_1 = data_parallel_1.iloc[:, 14].unique()
unique_labels_parallel_2 = data_parallel_2.iloc[:, 5].unique()

print("Unique Labels - Generic Dataset:", unique_labels_generic)
print("Unique Labels - Parallel Dataset 1:", unique_labels_parallel_1)
print("Unique Labels - Parallel Dataset 2:", unique_labels_parallel_2)


# In[ ]:




