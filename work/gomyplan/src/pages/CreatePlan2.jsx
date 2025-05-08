import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import InputTitle from "../components/InputTitle";
import Input from "../components/Input";
import BigButton from "../components/BigButton";

// img
import IconPlus from "../assets/img/icon_plus.png";

// style
const TimeWrapper = styled.div`
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
`;

const TimeBox = styled.div`
  display: flex;
  align-items: center;
  gap: 5px;

  .form-control {
    border: 1px solid var(--color-border2);
    border-radius: 5px;
    width: 50px;
    height: 36px;
    background: var(--color-white);
    font-weight: 600;
    font-size: 14px;
    line-height: 130%;
    text-align: center;
    color: var(--color-default);
    padding: 0;
    transition: var(--transition);
  }

  .form-control::placeholder {
    color: var(--color-gray);
  }

  .form-control:focus {
    box-shadow: none;
  }

  .darkMode & .form-control {
    border: 1px solid var(--color-border);
    background: var(--color-darkgray2);
    color: var(--color-white);
  }
`;

const TimeDivision = styled.div`
  font-family: var(--second-family);
  font-weight: 400;
  font-size: 24px;
  line-height: 67%;
  text-align: center;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const PlanContent = styled.div`
  display: flex;
  border: 1px solid var(--color-border2);
  border-radius: 10px;
  width: 100%;
  height: 100px;
  background: var(--color-white);
  overflow: hidden;
  transition: var(--transition);

  .file_box {
    width: 100px;
    height: 100px;
    background: #e0e3e8;
    transition: var(--transition);
  }

  .file_box .form-label .preview {
    border-radius:0px;
  }

  .file_box .form-label .preview .btn_camera {
    width: 24px;
    right: 8px;
    top: 8px;
  }

  .darkMode & {
    border: 1px solid var(--color-border);
    background: var(--color-darkgray2);
  }

  .darkMode & .file_box {
    background: #373737;
  }
`;

const FormTxtBox = styled.div`
  flex: 1;
  padding: 10px;
  display: flex;
  flex-direction: column;

  textarea.form-control {
    min-height: unset;
    flex: 1;
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-black);
    padding: 0;
    border: none;
    transition: var(--transition);
  }

  textarea.form-control::placeholder {
    color: var(--color-gray);
  }

  textarea.form-control:focus {
    box-shadow: none;
  }

  .darkMode & textarea.form-control {
    background: var(--color-darkgray2);
    color: var(--color-white);
  }

  .darkMode & textarea.form-control::placeholder {
    color: var(--color-gray);
  }

  .darkMode & textarea.form-control:focus {
    box-shadow: none;
  }
`;

const AddBtnBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 6px;
  margin-bottom: 40px;
`;

const AddButton = styled.button`
  display: flex;
  align-items: center;
  gap: 4px;
  width: 100%;

  &::before {
    content: "";
    background: url(${IconPlus}) no-repeat center / contain;
    width: 30px;
    aspect-ratio: 1 / 1;
  }
`;

const AddButtonTxt = styled.div`
  flex: 1;
  font-weight: 500;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-darkgray);
  text-align: left;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const SaveTxt = styled.div`
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-gray);
`;

const CreatePlan2 = () => {
  const [switchChecked, setSwitchChecked] = useState({
    day1: false,
    day2: false,
  });

  const [imagePreviews, setImagePreviews] = useState({
    day1: null,
    day2: null,
  });

  const isButtonDisabled = () => {
    return !(switchChecked.day1 || switchChecked.day2);
  };

  const handleFileChange = (e, day) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onloadend = () => {
        setImagePreviews((prev) => ({ ...prev, [day]: reader.result }));
      };
      reader.readAsDataURL(file);
    }
  };

  const handleSwitchChange = (e, day) => {
    setSwitchChecked((prev) => ({ ...prev, [day]: e.target.checked }));
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Create a Plan" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Plan name</InputTitle>
              <InputGroup>
                <Input placeholder="Please enter the plan name." type="text" icon="write" value="Hong Kong 1 Week Plan" readOnly />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem border_ver">
              <InputTitle className="input_title">Day 1</InputTitle>
              <TimeWrapper>
                <Form.Check
                  type="switch"
                  id="custom-switch-day1"
                  label="Set time"
                  className="switch_ver"
                  checked={switchChecked.day1}
                  onChange={(e) => handleSwitchChange(e, "day1")}
                />
                <TimeBox>
                  <Form.Control type="number" placeholder="00" />
                  <TimeDivision>:</TimeDivision>
                  <Form.Control type="number" placeholder="00" />
                </TimeBox>
              </TimeWrapper>
              <PlanContent>
                <Form.Group controlId="formFile" className="file_box">
                  <Form.Label>
                    <span className="icon camera"></span>
                    {imagePreviews.day1 && (
                      <div className="preview">
                        <img src={imagePreviews.day1} alt="Preview" className="file_img" />
                        <div className="btn_camera"></div>
                      </div>
                    )}
                  </Form.Label>
                  <Form.Control type="file" onChange={(e) => handleFileChange(e, "day1")} />
                </Form.Group>
                <FormTxtBox>
                  <Form.Control as="textarea" rows={3} placeholder="Edit schedule..." />
                </FormTxtBox>
              </PlanContent>
            </Form.Group>

            <Form.Group className="formitem border_ver">
              <InputTitle className="input_title">Day 2</InputTitle>
              <TimeWrapper>
                <Form.Check
                  type="switch"
                  id="custom-switch-day2"
                  label="Set time"
                  className="switch_ver"
                  checked={switchChecked.day2}
                  onChange={(e) => handleSwitchChange(e, "day2")}
                />
                <TimeBox>
                  <Form.Control type="number" placeholder="00" />
                  <TimeDivision>:</TimeDivision>
                  <Form.Control type="number" placeholder="00" />
                </TimeBox>
              </TimeWrapper>

              <PlanContent>
                <Form.Group controlId="formFile2" className="file_box">
                  <Form.Label>
                    <span className="icon camera"></span>
                    {imagePreviews.day2 && (
                      <div className="preview">
                        <img src={imagePreviews.day2} alt="Preview" className="file_img" />
                        <div className="btn_camera"></div>
                      </div>
                    )}
                  </Form.Label>
                  <Form.Control type="file" onChange={(e) => handleFileChange(e, "day2")} />
                </Form.Group>
                <FormTxtBox>
                  <Form.Control as="textarea" rows={3} placeholder="Edit schedule..." />
                </FormTxtBox>
              </PlanContent>
            </Form.Group>
          </Form>
          <AddBtnBox>
            <AddButton>
              <AddButtonTxt>Add a day</AddButtonTxt>
            </AddButton>
            <AddButton>
              <AddButtonTxt>Add a photo (0)</AddButtonTxt>
            </AddButton>
          </AddBtnBox>
        </PageContent>
        <PageBtnbox>
          <SaveTxt>Last edited 1 minute ago</SaveTxt>
          <BigButton disabled={isButtonDisabled()}>Save Plan</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default CreatePlan2;
